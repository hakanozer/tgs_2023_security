<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

    <div class="row">
    <form method="post" action="/saveRegister" class="col-sm-6">
        <h2>User Register</h2>

        <c:if test="${password != null}">
            ${password}
        </c:if>

        <c:if test="${errors != null}">
            <c:forEach var="item" items="${errors}">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong><c:out value="${item.getField()}"></c:out></strong> <c:out value="${item.getDefaultMessage()}"></c:out>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </c:forEach>
        </c:if>
        <div class="mb-3">
            <input required name="name" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <input required type="email" name="email" class="form-control" placeholder="E-Mail">
        </div>
        <div class="mb-3">
            <input required name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button class="btn btn-success">Send</button>
    </form>
        <div class="col-sm-6"></div>
    </div>

</div>
</body>
</html>