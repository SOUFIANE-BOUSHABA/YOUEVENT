<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouEvent</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
          type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <form id="dataForm">

        <label for="ticketType">Ticket Type:</label>
        <input type="text" id="ticketType" name="ticketType" class="form-control " required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" class="form-control " required>

        <label for="unitPrice">Unit Price:</label>
        <input type="number" id="unitPrice" name="unitPrice" class="form-control " required>

        <button type="button" class="btn btn-success mt-2" onclick="addData()">Add Data</button>
    </form>
</div>

<!-- Display the entered data -->
<div id="displayData" class="text-center">
    <h2>Entered Data:</h2>
    <ul id="dataList"></ul>
</div>

<!-- Button to send data to the server -->
<a type="button" class="btn btn-primary d-block mx-auto mt-3 w-25" onclick="sendToServer()" href="http://localhost/briefs/sprint4/brief3/YOUEVENT/auth/index">Send to Server</a>


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
            '<button type="button" class="btn btn-danger ml-2" onclick="deleteEntry(' + (dataArr.length - 1) + ')">Delete</button>';

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