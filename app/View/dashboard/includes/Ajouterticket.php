<?php
include_once '../app/View/dashboard/includes/header.php';
?>
<form id="dataForm">
    <label for="ticketType">Ticket Type:</label>
    <input type="text" id="ticketType" name="ticketType" required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required>

    <label for="unitPrice">Unit Price:</label>
    <input type="number" id="unitPrice" name="unitPrice" required>

    <button type="button" onclick="addData()">Add Data</button>
</form>

<!-- Display the entered data -->
<div id="displayData">
    <h2>Entered Data:</h2>
    <ul id="dataList"></ul>
</div>

<!-- Button to send data to the server -->
<a type="button" class="btn-primary" onclick="sendToServer()" href="http://localhost/briefs/sprint4/brief3/YOUEVENT/auth/index">Send to Server</a>

<script>
    // Array to store entered data
    var dataArr = [];

    // JavaScript function to add entered data to the list
    function addData() {
        // Get values from the form
        var ticketType = document.getElementById("ticketType").value;
        var quantity = document.getElementById("quantity").value;
        var unitPrice = document.getElementById("unitPrice").value;

        // Add the entered data to the array as an associative array
        dataArr.push({ ticketType: ticketType, quantity: quantity, unitPrice: unitPrice });

        // Create a new list item with the entered data
        var listItem = document.createElement("li");
        listItem.innerHTML = "Ticket Type: " + ticketType + ", Quantity: " + quantity + ", Unit Price: " + unitPrice +
            '<button type="button" onclick="deleteEntry(' + (dataArr.length - 1) + ')">Delete</button>';

        // Append the list item to the list
        document.getElementById("dataList").appendChild(listItem);

        // Clear the form fields
        document.getElementById("ticketType").value = "";
        document.getElementById("quantity").value = "";
        document.getElementById("unitPrice").value = "";
    }

    // JavaScript function to delete an entry from the array and update the displayed list
    function deleteEntry(index) {
        // Remove the entry from the array
        dataArr.splice(index, 1);

        // Update the displayed list
        displayData();
    }

    // JavaScript function to update the displayed list
    function displayData() {
        var listContainer = document.getElementById("dataList");
        listContainer.innerHTML = '<h2>Entered Data:</h2><ul id="dataList"></ul>';

        // Loop through the array and recreate the list
        for (var i = 0; i < dataArr.length; i++) {
            var listItem = document.createElement("li");
            listItem.innerHTML = "Ticket Type: " + dataArr[i].ticketType + ", Quantity: " + dataArr[i].quantity +
                ", Unit Price: " + dataArr[i].unitPrice +
                '<button type="button" onclick="deleteEntry(' + i + ')">Delete</button>';
            listContainer.appendChild(listItem);
        }
    }

    // JavaScript function to send data to the server
    function sendToServer() {
        // Perform an AJAX request using the fetch API
        fetch('organisateur/ajouterTicket', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ data: dataArr }),
        })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                alert("Data sent to the server!");
            })
            .catch((error) => {
                console.error('Error:', error);
            });

        // Clear the displayed data and the array
        document.getElementById("dataList").innerHTML = "";
        dataArr = [];
    }
</script>

</body>
</html>