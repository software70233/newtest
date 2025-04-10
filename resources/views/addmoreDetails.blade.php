<html>
    <head>
</head>
<body>
        <h1>Welcom To Our ERP</h1>
      <form method="post" action="{{route('addmorepost')}}">
        @csrf
        Name<input type="text" name="name" placeholder="Enter Name"><br><br>
        Email<input type="text" name="email" placeholder="Enter email"><br><br>
        Mobile<input type="text" name="mobile" placeholder="Enter mobile"><br><br>
        <input type="submit" value="submit">
      </form>
</body>
</html>