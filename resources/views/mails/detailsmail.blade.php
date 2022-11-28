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
            <td><strong>Email:</strong> </td>
            <td>{{$data['email']}}</td>
        </tr>
        <tr>
            <td><strong>Phone:</strong> </td>
            <td>{{$data['phone']}}</td>
        </tr>
        <tr>
            <td><strong>I'm a:</strong> </td>
            <td>{{$data['buyer']}}</td>
        </tr>
        <tr>
            <td><strong>Message:</strong> </td>
            <td>{{$data['message']}}</td>
        </tr>
    </table>

</body>

</html>