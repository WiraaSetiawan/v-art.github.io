<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vart.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>V-Art</title>
</head>
<body> 
    <header>
        <a href="#" class="logo">Logo</a>
        <form action="" class="search">
            <input type="text" placeholder="Search 'Tari Piring'" name="q">
            <button type="submit"><img src="search.png"></button> 
        </form>
        <ul>
            <li><a href="vart.html">Home</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">VIP</a></li>
        </ul>
    </header>

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="7eb1a70d9a62124838fa3eb50b2b5b11.jpg" alt="">
            </div>
            <div class="slide">
                <img src="7eb1a70d9a62124838fa3eb50b2b5b11.jpg" alt="">
            </div>
            <div class="slide">
                <img src="7eb1a70d9a62124838fa3eb50b2b5b11.jpg" alt="">
            </div>
            <div class="slide">
                <img src="7eb1a70d9a62124838fa3eb50b2b5b11.jpg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        },5000);
    </script>

    <div class="table-list">
        <p>FREE</p>
        <div class="table">
            <table>
            <tr>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
            </tr>
            <tr>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
            </tr>
        </table>
        <a><button type="button"><span></span>More</button></a>

        <hr>

        <p>Recommended</p>
        <div class="table">
            <table>
            <tr>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
            </tr>
            <tr>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
                <td>Video 1</td>
            </tr>
        </table>
        <a><button type="button"><span></span>More</button></a>

        <hr>

        <p>VIP</p>
        <div class="table">
            <table>
            <tr>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
                <td><img src="Screenshot_2023-01-13-18-08-52-67.png" alt=""></td>
            </tr>
            <tr>
                <td>Video 1 <label>VIP</label></td>
                <td>Video 1 <label>VIP</label></td>
                <td>Video 1 <label>VIP</label></td>
                <td>Video 1 <label>VIP</label></td>
                <td>Video 1 <label>VIP</label></td>
                <td>Video 1 <label>VIP</label></td>
            </tr>
        </table>
        <a><button type="button"><span></span>More</button></a>

        <hr>

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>V-Art</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Service</a></li>
                        <li><a href="#">privacy policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">VIP</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Report</h4>
                    <ul>
                        <li><a href="#">Error Link</a></li>
                        <li><a href="#">Error Video</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Community</h4>
                    <div class="social-link">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>