<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertemuan 4</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            padding: 20px;
            height: 70px;
            background-color: #f4f4f4;
            border-bottom: 1px solid black;
        }
        .logo {
            margin-right: 100px;
            width: 60px;
            height: 60px;
            outline: 1px solid;
            border: 2px solid black;
            border-radius: 50%;
            object-fit: cover;
        }
        .header-content {
            display: flex;
            align-items: center;
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            min-width: 200px;
        }
        .header-title {
            margin-left: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .search-filter {
            display: flex;
            align-items: center;
            margin-left: auto;
            padding-right: 10px;
            flex-wrap: wrap;
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            min-width: 200px;
        }
        .search-filter > * {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        input[type="text"] {
            padding: 5px;
            width: 100%;
            max-width: 100px;
        }
        select {
            padding: 5px;
            width: 100%;
            max-width: 50px;
        }
        .main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }
        .items-card {
            height: 200px;
            width: 160px;
            outline: solid 1px black;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-around;
            margin: 10px;
            padding: 10px;
        }
        .items-card img {
            width: 75%;
            height: 100px;
            align-self: center;
        }
        .items-card h5 {
            font-size: 13px;
            margin: 5px 0;
        }
        .items-card div {
            margin: 5px 0;
        }
        .mostly-borrowed {
            background-color: #0051ff;
            color: white;
            font-size: 8px;
            padding: 2px 6px;
            margin-bottom: 3px;
            display: inline-block;
        }
        .available {
            color: black;
            font-size: 15px;
            display: flex;
            align-items: center;
        }
        .booking {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            margin-top: 15px;
        }
        .book button {
            height: 30px;
            width: 125px;
            border-radius: 10px;
            box-shadow: 3px black;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .items-card {
                padding: 0rem 0px 0px 0rem;
                height: 150px;
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .items-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <img class="logo" src="/img/cekdong.png" alt="Top Image">
        </div>
    </header>
    <div class="search-filter">
        <div class="header-title">Equipment</div>
        <select>
            <option value="all">All</option>
            <option value="category1">Category 1</option>
            <option value="category2">Category 2</option>
        </select>
        <input type="text" placeholder="Search...">
    </div>
    <p>All List of goods, please tap the goods for start booking</p>
    <div class="main">
        <div class="items-card">
            <div class="mostly-borrowed">Most Borrowed</div>
            <img src="/img/1_lighting_set_sony.png" alt="">
            <h5>Lighting Set Sony</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/2_cle.png" alt="">
            <h5>Canon Lens EFS 18-135mm</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/3.png" alt="">
            <h5>Sony PXW-Z90T XDCAM camrecorder</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <div class="mostly-borrowed">Most Borrowed</div>
            <img src="/img/4.png" alt="">
            <h5>Canon EOS 40000</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <div class="mostly-borrowed">Most Borrowed</div>
            <img src="/img/5.png" alt="">
            <h5>TaffSTUDIO Softbox Reflextor</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/6.png" alt="">
            <h5>Inbex Lighting Studio Softbox</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/7.png" alt="">
            <h5>Triopo LED 204 Video Lighting Kit</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/8.png" alt="">
            <h5>F8 Reflek Lens 900 mm</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/9.png" alt="">
            <h5>Sony FE 24-70mm F2.8 GM LENS</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/10.png" alt="">
            <h5>Canon EFS 18-55mm</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/11.png" alt="">
            <h5>Nikon D7500</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/12.png" alt="">
            <h5>Instax slim-go</h5>
            <div class="available"><h2 style="color:black"> •</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/13.png" alt="">
            <h5>Sony Zeiss</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <div class="mostly-borrowed">Most Borrowed</div>
            <img src="/img/black_backdrop.png" alt="black backdrop">
            <h5>Black Backdrop kit</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
        <div class="items-card">
            <img src="/img/blue_backdrop.png" alt="blue backdrop">
            <h5>Blue Backdrop kit</h5>
            <div class="available"><h2 style="color:black">•</h2> Available</div>
        </div>
    </div>
    <div class="booking">
        <div class="book">
            <button>Book Now!</button>
        </div>
    </div>
</body>
</html>
