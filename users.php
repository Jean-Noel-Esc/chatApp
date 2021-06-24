<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">       
</head>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="Kid Boom.png" alt="">
                    <div class="details">
                        <span>jeannoel</span>
                        <p> Active now </p>
                    </div>
                </div>
               <a href="#"  class="Logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chatin</span>
                <input type="text" placeholder="enter name to search...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="Kid Boom.png" alt="">
                        <div class="details">
                            <span>jeannoel</span>
                            <p> test msg </p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="Kid Boom.png" alt="">
                        <div class="details">
                            <span>jeannoel</span>
                            <p> test msg </p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="Kid Boom.png" alt="">
                        <div class="details">
                            <span>jeannoel</span>
                            <p> test msg </p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>

        </section>
    </div>
    <script src="javascript/users.js"></script>

</body>

</html>
