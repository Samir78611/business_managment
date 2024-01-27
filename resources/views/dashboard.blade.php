<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Dashboared</title>
</head>

<body>
    @if(Session::has('success'))
        <h3 style="color:#00ff00">{{ Session::get('success') }}</h3>
    @endif
    <br>
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        /* Style to close button */
        .close {
            cursor: pointer;
            float: right;
            font-size: 20px;
        }

    </style>
    </head>

    <body>

        <!-- Trigger the modal with a button -->
        <button onclick="openModal()"> Create Business Details</button>

        <!-- The overlay background -->
        <div id="overlay" class="overlay" onclick="closeModal()"></div>

        <!-- The modal -->
        <div id="businessDetailsModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>

            <!-- Your form goes here -->
            <form id="businessDetailsForm" action="create_business" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" maxlength="120" required><br>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" maxlength="1000" required></textarea><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="website">Website:</label>
                <input type="url" id="website" name="website"><br>

                <label for="contact_person">Contact Person Name:</label>
                <input type="text" id="contact_person" name="contact_person"><br>

                <label for="phone_number">Phone Number:</label>
                <input type="tel" id="phone_number" name="phone_number"><br>

                <button type="submit">Submit</button>
            </form>
        </div>

        <script>
            function openModal() {
                document.getElementById('overlay').style.display = 'block';
                document.getElementById('businessDetailsModal').style.display = 'block';
            }

            function closeModal() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('businessDetailsModal').style.display = 'none';
            }

        </script>

        <table border=1>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Website</th>
            <th>Contact person name</th>
            <th>Phone Number</th>
            <tr>
            @foreach($businesses as $business)
                <td>{{$business->id}}</td>
                <td>{{$business->name}}</td>
                <td>{{$business->address}}</td>
                <td>{{$business->email}}</td>
                <td>{{$business->website}}</td>
                <td>{{$business->contact_person}}</td>
                <td>{{$business->phone_number}}</td>

            </tr>
            @endforeach

        </table>
    </body>

</html>
