document.addEventListener("DOMContentLoaded", function () 
{
    const createButton = document.querySelector(".btn1");
    const viewRecordsButton = document.querySelector(".btn2");
    const creationDiv = document.getElementById("creation");
    const selectionDiv = document.querySelector(".selection");
    const registrationForm = document.getElementById("registrationForm");

    createButton.addEventListener("click", function () 
    {
        hideDiv(selectionDiv);
        toggleDiv(creationDiv);
    });

    viewRecordsButton.addEventListener("click", function () 
    {
        hideDiv(creationDiv);
        selectionDiv.style.display = "block";
        fetchLatestTableData();
    });

    registrationForm.addEventListener("submit", function (event) 
    {
        event.preventDefault();
        const formData = new FormData(registrationForm);
        fetch("insert.php", 
        {
            method: "POST",
            body: formData,
        })
            .then((response) => response.text())
            .then((data) => 
            {
                alert("Form submitted without redirection. Response: " + data);
            })
            .catch((error) => 
            {
                alert("An error occurred: " + error);
            });
    });

    function fetchLatestTableData() 
    {
        fetch("table.php")
            .then((response) => response.text())
            .then((data) => 
            {
                selectionDiv.innerHTML = data;
            })
            .catch((error) => {
                alert("An error occurred while fetching the latest table data: " + error);
            });
    }

    function hideDiv(div) {
        if (div.style.display === "block") {
            div.style.display = "none";
        }
    }

    function toggleDiv(div) {
        if (div.style.display === "block") {
            div.style.display = "none";
        } else {
            div.style.display = "block";
        }
    }
});