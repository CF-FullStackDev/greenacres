<!DOCTYPE html>
<html>
<head>
	<title>Greenacres Inquiry Form</title>
</head>
<style>
    span {
        display: block;
    }
</style>
<body>
	<span>Name: {{ $inquiry['name'] }}</span>
    <span>Email: {{ $inquiry['email'] }}</span>
    <span>Address: {{ $inquiry['address'] }}</span>
    <span>Phone: {{ $inquiry['phone'] }}</span>
    <span>Intrests: {{ $inquiry['interest'] }}</span>
    <span>Message: {{ $inquiry['message'] }}</span>
</body>
</html>
