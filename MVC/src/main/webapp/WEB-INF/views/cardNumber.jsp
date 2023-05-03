<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, customer-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <jsp:include page="inc/navbar.jsp"></jsp:include>

    <div class="row">
        <form method="post" action="/cardSave" class="col-sm-5">
            <h2>Welcome Save</h2>
            <div class="mb-3">
                <input name="number" placeholder="Card Number" class="form-control" />
            </div>
            <div class="mb-3">
                <input name="extraKey" placeholder="Extra Key" class="form-control" />
            </div>
            <button class="btn btn-success">Send</button>
        </form>
    </div>

    <c:if test="${enCard != null}">
        <span class="badge rounded-pill text-bg-primary"><c:out value="${enCard.number}"></c:out></span>
    </c:if>
    <c:if test="${carts != null}">
        <hr/>
        <h2>Card List</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">CardNumber</th>
                <th scope="col">Ektra Key</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <c:forEach items="${carts}" var="item">
             <form method="post" action="/openCard">
                <tr>
                    <th scope="row"><c:out value="${item.cid}"></c:out></th>
                    <td><input class="form-control" value="<c:out value="${item.number}"></c:out>" name="number" /></td>
                    <td><input class="form-control" name="extraKey" /></td>
                    <td><button class="btn btn-danger btn-sm">Send</button></td>
                </tr>
             </form>
            </c:forEach>

            </tbody>
        </table>
    </c:if>


</div>
</body>
</html>