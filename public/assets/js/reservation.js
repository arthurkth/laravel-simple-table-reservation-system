(() => {
    const reservationBtn = document.querySelector("#reservation-btn");
    let csrf = document.querySelector('meta[name="csrf-token"]').content;

    document.querySelector("#input-date").addEventListener('input', (e) => {
        let day = new Date(e.target.value).getUTCDay();
        if(day == 0) {
            document.querySelector(".form-error").textContent = "Restaurante fechado aos domingos, escolha outra data!";
            e.target.value = "";
        } else {
            document.querySelector(".form-error").textContent = ""
        }
    })
    reservationBtn.addEventListener("click", (e) => {
        e.preventDefault();
        let hour = document.querySelector("#input-hour").value;
        let date = document.querySelector("#input-date").value;
        let name = document.querySelector("#input-name").value;
        let phone = document.querySelector("#input-phone").value;
        let table = document.querySelector("#input-table").value;
        let escorts = document.querySelector("#input-escorts").value;
        createReservation({ name, phone, date, hour, table, escorts });
        document.querySelector(".form-success").textContent = "";
        document.querySelector(".form-error").textContent = ""
    });

    const createReservation = async (reservation) => {
        try {
            const data = await fetch("/reservation", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrf,
                },
                body: JSON.stringify(reservation),
            });

            const res = await data.json();

            if (res.success) {
                document.querySelector(".form-success").textContent =
                    res.success;
                    resetInputs();
            } else {
                document.querySelector(".form-error").textContent = res.danger;
            }
        } catch (err) {
            console.log(err);
        }
    };

    const resetInputs = () => {
        document.querySelector("#input-hour").value = "";
        document.querySelector("#input-date").value = "";
        document.querySelector("#input-name").value = "";
        document.querySelector("#input-phone").value = "";
        document.querySelector("#input-table").value = "";
        document.querySelector("#input-escorts").value = "";
    };
})();
