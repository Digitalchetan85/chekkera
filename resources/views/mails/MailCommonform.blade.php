<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
</head>

<body>

    <table rules="all" style="border-style: solid; border-color: #666;" cellpadding="10">
        <tr>
            <td><strong>Name:</strong> </td>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <td><strong>Company:</strong> </td>
            <td>{{$data['company']}}</td>
        </tr>
        <tr>
            <td><strong>Email:</strong> </td>
            <td>{{$data['email']}}</td>
        </tr>
        <tr>
            <td><strong>Location:</strong> </td>
            <td>{{$data['location']}}</td>
        </tr>
        <tr>
            <td><strong>Phone Number:</strong> </td>
            <td>{{$data['phone']}}</td>
        </tr>
        <tr>
            <td><strong>Address:</strong> </td>
            <td>{{$data['address']}}</td>
        </tr>
        <tr>
            <td><strong>City:</strong> </td>
            <td>{{$data['city']}}</td>
        </tr>
        <tr>
            <td><strong>Pincode:</strong> </td>
            <td>{{$data['pincode']}}</td>
        </tr>
        <tr>
            <td><strong>Message:</strong> </td>
            <td>{{$data['message']}}</td>
        </tr>
    </table>

</body>

</html>