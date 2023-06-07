<!DOCTYPE html>
<html>

<head>
    <title>Cekula</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="js/jquery.min.js"></script>
    <script src="<https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("password");
            var y = document.getElementById("togglePassword");
            if (x.type === "password") {
                x.type = "text";
                y.classList.remove("fa-eye-slash");
                y.classList.add("fa-eye");
            } else {
                x.type = "password";
                y.classList.remove("fa-eye");
                y.classList.add("fa-eye-slash");
            }
        }
    </script>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa fa-close' :
                'fa fa-bars'
        }
    </script>
    <script>
        function Validasi3() {
            var nid = (document.getElementById("nid").value);
            //cek nrp tidak boleh kosong
            if (nid.length == 0) {
                document.getElementById("errornid").innerHTML = "NID harus diisi";
                return false;
            }
            if (isNaN(nid)) {
                document.getElementById("errornid").innerHTML = "NID harus angka";
                return false;
            }
            if (nid.length == 10) {
                document.getElementById("errornid").innerHTML = "";
                return true;
            } else if (nid.length == 15) {
                document.getElementById("errornid").innerHTML = "";
                return true;
            }
            if (nid.length < 10 || nid.length > 15) {
                document.getElementById("errornid").innerHTML = "NID harus 10 atau 15";
                return false;
            }
            //return false;
        }

        function Validasi1() {
            var nrp = (document.getElementById("nrp").value);
            //cek nrp tidak boleh kosong
            if (nrp.length == 0) {
                document.getElementById("errornrp").innerHTML = "NRP harus diisi";
                return false;
            }
            if (isNaN(nrp)) {
                document.getElementById("errornrp").innerHTML = "NRP harus angka";
                return false;
            }
            if (nrp.length == 10) {
                document.getElementById("errornrp").innerHTML = "";
                return true;
            } else if (nrp.length == 15) {
                document.getElementById("errornrp").innerHTML = "";
                return true;
            }
            if (nrp.length < 10 || nrp.length > 15) {
                document.getElementById("errornrp").innerHTML = "NRP harus 10 atau 15";
                return false;
            }
            //return false;
        }

        function Validasi2() {
            let Nama = (document.getElementById("nama").value);
            if (Nama.length == 0) {
                document.getElementById("errornama").innerHTML = "Nama Harus diisi";
                return false;
            } else if (!cekuser(Nama)) {
                document.getElementById("errornama").innerHTML = "Nama harus huruf";
                return false;
            }
            if (Nama.length < 5) {
                document.getElementById("errornama").innerHTML = "Harus lebih dari 5 namun kurang dari 30";
                return false;
            }
            if (Nama.length > 30) {
                document.getElementById("errornama").innerHTML = "Harus kurang dari 30 namun lebih dari 5";
                return false;
            }
            if (Nama.length >= 5 || Nama.length <= 30) {
                document.getElementById("errornama").innerHTML = "";
                return true;
            }
        }
        window.onscroll = function() {
            my()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function my() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
    <style>
        .accordion-item:last-of-type {

    border-radius: 20px;
    margin-bottom:20px;
    border:2px solid #6070FF;
}
.accordion-item:first-of-type .accordion-button {

    border-radius: 20px;
    background-color:white;
    color:#7573FF;
}
.accordion-item:last-of-type .accordion-button.collapsed {

    border-radius:20px;
}
        .berandaortu {
            margin: 0px;
            padding: 0px;
            background-image: url('/data_file/Halaman Beranda (Ortu)(1).png');
            background-size: cover;
            background-attachment: fixed;
        }

        .mulai {
            margin: 0px;
            padding: 0px;
            background-image: url('/data_file/Halaman Awal (ALUR ORTU).png');
            background-size: cover;
            background-attachment: fixed;
        }

        .masuksebagai {
            margin: 0px;
            padding: 0px;
            background-image: url('/data_file/Group 194.png');
            background-size: cover;
            background-attachment: fixed;
        }

        .masuk {
            margin: 0px;
            padding: 0px;
            background-color: #7C88F2;
            background-size: cover;
            background-attachment: fixed;
        }

        .daftarsekolah {
            margin: 0px;
            padding: 0px;
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-attachment: fixed;
        }

        .linkheader {
            color: #B3B3B3;
        }

        .linkheader:hover {
            color: #080808;
        }

        .linkheader:active {
            color: #7C88F2;
        }

        .list {
            text-decoration: none;
            margin-right: 20px;
            margin-top: 5px;
            letter-spacing: 1.2px;
        }

        .list1 {
            margin-left: 60px;
            cursor: pointer;
        }

        .nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 15px;
            font-family: 'Poppins', 'sans serif';
            font-weight: bolder;
            width: 100%;
            padding-left: 20px;
            padding-right: 20px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(124, 136, 242, 0.742), 0 6px 20px 0 rgba(220, 222, 245, 0.19);
        }

        .nav-logo {
            width: 200px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .nav-bar ul {
            display: flex;
            list-style: none;
            margin-top: 20px;
        }

        .content {
            padding-top: 26px;
        }

        .sticky {
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 99;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        .foot1 {
            margin-right: auto;
            margin-left: auto;
            background-color: #F1E4F3;
            padding-top: 5px;
        }

        .foot2 {
            padding-right: 20px;
            padding-bottom: 5px;
            padding-left: 25px;
        }

        .foot3 {
            color: #8C8C8C;
            font-family: 'Poppins', 'sans serif';
        }

        .fa-instagram:hover {
            color: #B388EB !important;
        }

        .fa-envelope-o:hover {
            color: #B388EB !important;
        }

        .fa-whatsapp:hover {
            color: #B388EB !important;
        }

        .toggle_btn {
            display: none;
        }

        .dropdown_menu {
            position: absolute;
            right: 10px;
            height: 0;
            top: 60px;
            width: 200px;
            background: #7c88f242;
            backdrop-filter: blur(15px) saturate(180%);
            background-blend-mode: normal;
            border-radius: 10px;
            overflow: hidden;
            display: none;
            transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 4;
        }

        .dropdown_menu.open {
            height: 170px;
        }

        .dropdown_menu li {
            padding: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bolder;
        }

        .dropdown_menu li a {
            color: black;
            font-size: 15px;
        }

        .flex-container {
            display: flex;
            justify-content: center;
            background-color: transparent;
            flex-wrap: wrap;

        }

        .flex-container button {
            background-color: white;
            width: 341px;
            height: 150px;
            margin: 30px;
            text-align: left;
            line-height: 15px;
            border: 2px solid white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 15px;
        }

        .flex-container button a {
            color: black;
        }

        .flex-container button a:hover {
            color: #7C88F2;
        }

        .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(131, 143, 255);
            z-index: 9999;
            transition: opacity 0.75s, visibility 0.75s;
        }

        .loader--hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader::after {
            content: " ";
            width: 75px;
            height: 75px;
            border: 15px solid white;
            border-top-color: #6070FF;
            border-radius: 50%;
            animation: loading 0.75s ease infinite;

        }

        @keyframes loading {
            from {
                transform: rotate(0turn)
            }

            to {
                transform: rotate(1turn)
            }
        }


        @media (max-width: 282px) {
            .img4 {
                display: block;
                margin-right: 150%;
                width: 70px;
                padding: 5px;
            }
        }

        @media (max-width: 360px) {
            .img1 {
                display: block;
                margin-right: auto;
                width: 250px;
            }

            h1 {
                font-size: 20px;
                font-family: 'Poppins', sans-serif;
                font-weight: 100px;
            }
        }

        @media (max-width: 768px) {
            .button15 {
                    display:block;
                    width: 200px;
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #ff6969;

                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button15:hover {
                    background-color: #ff8383;
                    color: white;
                    border: 2px solid white;
                }
            .css-serial {
  counter-reset: serial-number;  /* Atur penomoran ke 0 */
}
.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Kenaikan penomoran */
  content: counter(serial-number);  /* Tampilan counter */
}
                .table-white{
                    background-color:white;
                    padding:10px;
                    border-radius:25px;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                }
                .table-white th{
                   text-align:center;
                }
            .bg-bandingkan3 {
                    background-color:838FFF;
                    padding: 20px;
                    margin-top: 75px;
                    margin-right: 15px;
                    margin-left: 20px;
                    margin-bottom: 200px;
                    border-radius: 20px;
                }

            .button8 {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: rgba(114, 221, 247,0.55);
                border-radius: 25px;
                color: white;
                font-weight: bold;
            }

            .button8:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }
            .bg-bandingkan4{
                    background-color:white;
                    padding:20px;
                    margin:10px;
                    width: 400px;
                    border-radius:20px;


                }
                .button7 {
                    display:block;
                    width: 400px;
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    margin-bottom: 70px;
                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button7:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }
                .button10 {
                    display:block;
                    width: 200px;
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;

                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button10:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }

                .button16 {
                    display:block;
                    width: 150px;
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button16:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }
                .button14 {
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #62D16D;

                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button14:hover {
                    background-color: #62D16D;
                    color: white;
                    border: 2px solid white;
                }
            .batasatas{
                    margin-top:20px;
                }
            .button6 {
                    display: block;
                    width: 150px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    border-radius: 25px;
                    color: white;
                    font-weight: bold;
                }

                .button6:hover {
                    background-color: white;
                    color: #838FFF;
                    border: 2px solid #838FFF;
                }
                .buttonss {
                display: block;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                border-radius: 25px;
                color: #838FFF;
                font-weight: bold;
            }

                .buttonss:hover {
                background-color: #838FFF;
                color: white;
                border: 2px solid white;
            }
            .buttons {
                    display: block;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #7DC595;
                    border-radius: 18px;
                    padding: 15px 32px;
                    color: white;
                    font-weight: bold;
                }

                .buttons:hover {
                    background-color: white;
                    color: #7DC595;
                    border: 2px solid #838FFF;
                }
            .inputmasuk2 {
                    background-color: #fffefe;
                    border-radius: 15px;
                    padding: 10px;}
            .ScrollStyle {
                    display: block;
                    height: 400px;
                    overflow-y: scroll;

                }

                /* width */
                .ScrollStyle::-webkit-scrollbar {
                    width: 15px;

                }

                /* Track */
                .ScrollStyle::-webkit-scrollbar-track {
                    background: #f1f1f1;
                    border-radius: 10px;

                }

                /* Handle */
                .ScrollStyle::-webkit-scrollbar-thumb {
                    background: #E0E0FC;
                    height:50px;border-radius:10px;
                }

                /* Handle on hover */
                .ScrollStyle::-webkit-scrollbar-thumb:hover {
                    background: #555;
                }
            .module-border-wrap {
  width:120px;
  height:120px;
  padding: 1rem;
  position: relative;
  background: linear-gradient(to left, #7573FF, rgba(114, 221, 247,0.5));
  padding: 5px;
  border-radius:50%;
  padding-top:auto;

padding-bottom:auto;

}

.module {

    width:110px;
  height:110px;
  background: #ffffff;
  color:#6070FF;
  font-weight:bold;
  font-size:18px;
  text-align:center;

  padding-top:30%;

  border-radius:50%;
}
            .col-md-9{
                    margin-top:10px;
                margin-bottom:20px;
                }
            .col-md-4{
                    margin-top:10px;
                margin-bottom:20px;
                }

            .tab {
                    overflow: hidden;
                }

                /* Style the buttons inside the tab */
                .tab a {
                    background-color: inherit;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    transition: 0.3s;
                    font-size: 18px;
                    margin-left:30px;
                    color:#8C8C8C;
                    font-weight: bold;

                }

                /* Change background color of buttons on hover */
                .tab a:hover {
                    background-color: #ddd;
                }

                /* Create an active/current tablink class */
                .tab a.active {
                    font-weight:bold;
                    text-decoration-line: underline;
                    text-decoration-thickness: 3px;
                    color:#7C88F2;
                }

                /* Style the tab content */
                .tabcontent {
                    display: none;
                    padding-left:20px;
                    padding-top:20px;
                    border-top: none;
                    margin-right:20px;

                }

            .bg-profil {
                    background-color: white;
                    padding-top: 30px;
                    padding-bottom: 20px;
                    border-top-left-radius: 60px 30px;
                    border-top-right-radius: 60px 30px;
                    display:flex;
                    flex-wrap: wrap;
                    box-shadow: 0px -10px 5px  #5b5757c8;

                }
            .flex-container2 {
                display: flex;
                justify-content: center;
                margin-top: 40px;
                flex-wrap: wrap;

            }

            .flex-container2 .c2 {
                padding-top: 30px;
                background-color: #FFEA7C;
                width: 580px;
                text-align: center;
                line-height: 75px;
                font-size: 30px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                border-radius: 20px;
                padding-bottom: 60px;
            }

            .flex-container2 .c3 {
                background-color: rgba(247, 174, 248, 0.8);
                width: 150px;
                text-align: center;
                line-height: 75px;
                font-size: 40px;
                font-weight: bolder;
                margin-top: -20px;
                margin-bottom: -20px;
                padding-top: 30px;
                padding-left: 15px;
                padding-bottom: 30px;
                padding-right: 15px;
                z-index: 2;
                border-radius: 55%;
            }

            .button4 {
                display: block;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: #D9D9D9;

                color: #000000;
                margin-top: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 18px;
                font-family: 'Poppins', 'Sans-Serif';
                font-weight: 500 !important;
            }

            .active3,
            .button4:hover {
                background-color: rgba(217, 217, 217, 0.7);
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }

            .button4:after {
                content: '\002B';
                color: #000000;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            .active3:after {
                content: "\2212";
            }

            .panel {
                padding: 0 18px;
                background-color: rgba(255, 255, 255, 0.7);
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }

            .button5 {
                display: block;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
                background-color: #D9D9D9;

                color: #000000;
                margin-top: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 18px;
                font-family: 'Poppins', 'Sans-Serif';
                font-weight: 500 !important;
            }

            .active4,
            .button5:hover {
                background-color: rgba(217, 217, 217, 0.7);
                border-bottom-left-radius: 0px;
                border-bottom-right-radius: 0px;
            }

            .button5:after {
                content: '\002B';
                color: #000000;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            .active4:after {
                content: "\2212";
            }

            .panel2 {
                padding: 0 18px;
                background-color: rgba(255, 255, 255, 0.7);
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.2s ease-out;
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }

            .linkdaftar {
                color: white;
            }

            .linkdaftar:hover {
                color: #000000;
            }

            .select-box {
                position: relative;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 30px;
            }

            .select-option {
                position: relative;

            }

            .select-option input {
                width: 100%;
                background-color: #D9D9D9;
                color: black;
                border-radius: 7px;
                cursor: pointer;
                font-size: 18px;
                padding: 5px 10px;
                border: 0 !important;
                outline: 0 !important;

            }

            .select-option:after {
                content: url(/data_file/Dropdown.png);
                position: absolute;
                right: 15px;
                top: 40%;

            }

            .content1 {
                background-color: white;
                position: absolute;
                color: black;
                border-radius: 7px;
                margin-top: 1px;
                width: 100%;
                z-index: 1;
                padding: 10px;
                display: none;

            }

            .search input {
                width: 100%;
                font-size: 14px;
                padding: 6px;
                outline: 0;
                border: 1px solid #b3b3b3;
                border-radius: 5px;
            }

            .options {
                margin-top: 10px;
                max-height: 150px;
                overflow-y: auto;
                padding: 0;
            }

            .options li {
                padding: 10px 15px;
                font-size: 16px;
                cursor: pointer;
                border-bottom: 1px solid black;
            }

            .options li:hover {
                background-color: #f2f2f2;
            }

            .select-box.active .content1 {
                display: block;
            }

            .select-box.active .select-option:after {
                transform: rotate(-180deg);
            }

            .select-box2 {
                position: relative;
                margin-left: auto;
                margin-right: auto;


            }

            .select-option2 {
                position: relative;

            }

            .select-option2 input {
                width: 100%;
                background-color: #D9D9D9;
                color: black;
                border-radius: 7px;
                cursor: pointer;
                font-size: 18px;
                padding: 5px 10px;
                border: 0 !important;
                outline: 0 !important;


            }

            .select-option2:after {
                content: url(/data_file/Dropdown.png);
                position: absolute;
                right: 15px;
                top: 60%;
            }

            .content2 {
                background-color: white;
                position: absolute;
                color: black;
                border-radius: 7px;
                margin-top: 1px;
                width: 100%;
                z-index: 1;
                padding: 10px;
                display: none;
            }

            .search2 input {
                width: 100%;
                font-size: 17px;
                padding: 10px;
                outline: 0;
                border: 1px solid #b3b3b3;
                border-radius: 5px;
            }

            .options2 {

                max-height: 150px;
                overflow-y: auto;
                padding: 0;
            }

            .options2 li {
                padding: 10px 15px;
                font-size: 16px;
                cursor: pointer;
                border-bottom: 1px solid black;
            }

            .options2 li:hover {
                background-color: #f2f2f2;
            }

            .select-box2.active2 .content2 {
                display: block;
            }

            .select-box2.active2 .select-option2:after {
                transform: rotate(-180deg);

            }

            .bg-bandingkan1 {
                background-color: #FFEA7C;
                padding: 20px;
                margin-top: 50px;
                margin-bottom: 200px;
                border-radius: 20px;
            }

            .bg-bandingkan2 {
                background-color: white;
                padding: 25px;
                margin: 10px;
                border-radius: 20px;
            }

            .carousel-indicators button {
                height: 10px !important;
                width: 10px !important;
                margin-top: 120px !important;
                border-radius: 100%;
                background-color: #D9D9D9 !important;
                margin-bottom: -50px !important;
            }

            .carousel-indicators button.active {
                height: 10px !important;
                width: 10px !important;
                margin-top: 120px !important;
                border-radius: 100%;
                background-color: rgba(247, 174, 248, 0.55) !important;
                margin-bottom: -50px !important;
            }


            .carousel-control-prev,
            .carousel-control-next {
                color: black;
                width: 40px;

            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                height: 100px;
                width: 100px;
                background-size: 100%, 100%;
                border-radius: 50%;
                background-image: none;


            }

            .carousel-control-next-icon:after {
                content: url(/data_file/Vector.png);
                margin-left: 10px;
                margin-right: 0px;
            }

            .carousel-control-prev-icon:after {
                content: url(/data_file/Vector1.png);
                margin-left: 10px;
                margin-right: 0px;
            }

            .search1 {
                display: flex;
                justify-content: center;
            }

            .search-bar {
                width: 100%;
                max-width: 400px;
                background-color: #3B3B3D;
                display: flex;
                align-items: center;
                border-radius: 60px;
                padding: 5px 15px;
            }

            .search-bar input {
                background: transparent;
                flex: 1;
                border: 0;
                outline: none;
                padding: 5px 5px;
                font-size: 15px;
                color: white;
            }

            .search-bar button img {
                width: 25px;
            }

            .search-bar button {
                border: 0;
                border-radius: 50%;
                width: 60px;
                background: transparent;
                cursor: pointer;
            }

            .nav-bar ul {
                display: none;
            }

            .toggle_btn {
                display: block;
                cursor: pointer;
            }

            .img3 {
                display: block;
                margin-left: 20%;
                margin-right: 20%;
                width: 200px;
                padding: 20px 20px 20px 20px;
            }

            h1 {
                font-size: 20px;
                font-family: 'Poppins', sans-serif;
                font-weight: 500px;
                margin-bottom: 20px;
            }

            h2 {
                font-size: 16px;
                font-family: 'Poppins', sans-serif;
                font-weight: 400;
                margin-bottom: 80px;
            }

            .button1 {
                display: block;
                width: 200px;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                margin-bottom: 100px;
                border-radius: 25px;
                color: #838FFF;
            }

            .button1:hover {
                background-color: #838FFF;
                color: white;
                border: 2px solid white;
            }

            .logomasuk {
                display: block;
                margin-left: auto;
                margin-right: auto;
                padding: 70px 20px 20px 20px;
                width: 150px;
            }

            .buttonmasuksebagai {
                background-color: white;
                color: #6070FF;
                border-radius: 25px;
                display: block;
                width: 300px;
                margin-left: auto;
                margin-right: auto;
                padding-left: auto;
                padding-right: auto;
                font-family: 'poppins', 'sans-serif';
                font-weight: bolder;
                padding: 20px;
                font-size: 20px;
            }

            .buttonmasuksebagai:hover {
                background-color: rgba(255, 255, 255, 0.669);
                color: #6070FF;
                border: 2px solid #6070FF;
            }

            .teksmasuk {
                text-align: center;
                font-size: 20px;
                color: white;
                margin-top: -30px;
                font-family: 'Poppins', 'sans serif';
                font-weight: 500px;
            }

            .logosekul {
                width: 90px;
                height: auto;
                padding-right: 20px;
                margin-left: -40px;
                margin-right: 40px;
            }

            .logoorangtua {
                width: 90px;
                height: auto;
                padding-right: 20px;
                margin-left: -30px;
                margin-right: 30px;
            }

            .button2 {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                border-radius: 25px;
                color: #838FFF;
                font-weight: bold;
            }

            .button2:hover {
                background-color: #838FFF;
                color: white;
                border: 2px solid white;
            }

            .button3 {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: #838FFF;
                border-radius: 25px;
                color: white;
                font-weight: bold;
            }

            .button3:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }

            .button11 {
                display: block;
                width: 120px;
                margin-left: auto;
                margin-right: auto;
                background-color: #838FFF;
                border-radius: 20px;
                padding:20px;
                color: white;
                font-weight: bold;
                font-size:14px;
            }

            .button11:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }
            .button12 {
                display: block;
                width: 120px;
                margin-left: auto;
                margin-right: auto;
                background-color: #ff8383;
                border-radius: 20px;
                padding:16px;
                color: white;
                font-weight: bold;
                font-size:14px;
            }

            .button12:hover {
                background-color: white;
                color: #ff8383;
                border: 2px solid #ff8383;
            }
            .button8 {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: rgba(114, 221, 247,0.55);
                border-radius: 25px;
                color: white;
                font-weight: bold;
            }

            .button8:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }


            .spasibawah {
                margin-bottom: 20px;
            }

            .logodaftar {
                display: block;
                margin-top: 60px;
                margin-left: auto;
                margin-right: auto;
                width: 100px;
                padding-right: 10px;
            }

            .textdaftar {
                text-align: center;
                font-size: 18px;
                font-family: 'Poppins', sans-serif;
                font-weight: 400;
            }

            .textsudahpunyaakun {
                margin-top: 20px;
                text-align: center;
                font-size: 15px;
                font-family: 'Poppins', sans-serif;
                font-weight: 500;
            }

            .link1 {
                color: #7C88F2;
                font-size: 18px;
                font-family: 'Poppins', sans-serif;
                font-weight: bolder;
                text-decoration: underline;
                margin-left: auto;
                margin-right: auto;
            }

            .link1:hover {
                color: #7c88f2a1;
                font-size: 18px;
                font-family: 'Poppins', sans-serif;
                font-weight: bolder;
                text-decoration: none;
                margin-left: auto;
                margin-right: auto;
            }

            .dropdown_menu {
                display: block;
            }

            .teksberanda1 {
                font-size: 20px;
                color: black;
                font-family: 'Poppins', 'Sans-serif';
                font-weight: bolder;
                text-align: center;
            }
            .teksberanda2 {
                font-size: 14px;
                color: black;
                font-family: 'Poppins', 'Sans-serif';
                font-weight: bolder;
                text-align: center;
            }
            .bg-bandingkan5 {
                    background-color: white;
                    padding: 15px;
                    border-radius: 20px;
                }
        }

        @media (max-width: 6500px) {
            @media (min-width:769px) {
                .button16 {
                    display:block;
                    width: 200px;
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 20px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                }
                .button16:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }
                .button15 {
                    display:block;
                    width: 400px;
                    padding:20px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #ff8383;

                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 20px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button15:hover {
                    background-color: #ff8383;
                    color: white;
                    border: 2px solid white;
                }
                .table-white th{
                   text-align:center;
                }
                .table-white tr{
                    margin-left:30px;
                }
                .css-serial {
  counter-reset: serial-number;  /* Atur penomoran ke 0 */
}
.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Kenaikan penomoran */
  content: counter(serial-number);  /* Tampilan counter */
}
                .table-white{
                    background-color:white;
                    padding:10px;
                    border-radius:25px;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                }
                .button14 {
                    padding:10px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #62D16D;

                    border-radius: 15px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 14px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button14:hover {
                    background-color: #62D16D;
                    color: white;
                    border: 2px solid white;
                }
                .button10 {
                    display:block;
                    width: 400px;
                    padding:20px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;

                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 20px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button10:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }
                .bg-bandingkan5 {
                    background-color: white;
                    padding: 25px;
                    border-radius: 20px;
                }
                label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        .container {
            border-radius: 5px;
            padding: 20px;
        }

        .col-50 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        .col-50 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }


                .bg-bandingkan3 {
                    background-color:838FFF;
                    padding: 20px;
                    margin-top: 75px;
                    margin-right: 175px;
                    margin-left: 200px;
                    margin-bottom: 200px;
                    border-radius: 20px;
                }
                .buttonss {
                display: block;
                margin-left: auto;
                margin-right: auto;
                background-color: white;
                border-radius: 25px;
                color: #838FFF;
                font-weight: bold;
            }

                .buttonss:hover {
                background-color: #838FFF;
                color: white;
                border: 2px solid white;
            }
                .button11 {
                display: block;
                width: 200px;
                margin-left: auto;
                margin-right: auto;
                background-color: #838FFF;
                border-radius: 25px;
                padding:20px;
                color: white;
                font-weight: bold;
                font-size:15px;
            }

            .button11:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }
            .button12 {
                display: block;
                width: 200px;
                margin-left: auto;
                margin-right: auto;
                background-color: #ff8383;
                border-radius: 25px;
                padding:20px;
                color: white;
                font-weight: bold;
                font-size:20px;
            }

            .button12:hover {
                background-color: white;
                color: #ff8383;
                border: 2px solid #ff8383;
            }
                .button9 {
                display: block;
                width: 150px;
                margin-left: auto;
                margin-right: auto;
                background-color: rgba(114, 221, 247,0.55);
                border-radius: 25px;
                color: white;
                font-weight: bold;

            }

            .button9:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }
                .button8 {
                display: block;
                width: 100px;
                margin-left: auto;
                margin-right: auto;
                background-color: rgba(114, 221, 247,0.55);
                border-radius: 25px;
                color: white;
                font-weight: bold;

            }

            .button8:hover {
                background-color: white;
                color: #838FFF;
                border: 2px solid #838FFF;
            }

                .button6 {
                    display: block;
                    width: 150px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    border-radius: 25px;
                    color: white;
                    font-weight: bold;
                }

                .button6:hover {
                    background-color: white;
                    color: #838FFF;
                    border: 2px solid #838FFF;
                }
                .bg-formulir{
                    background-color:aquamarine;
                    margin:30px;
                }
                .col-4{
                    margin-right:20px;
                }
                .col-8{
                    margin-left:20px;
                }
.boxx
{
    display:block;
    width:100%;
}
                .module-border-wrap {
  width:150px;
  height:150px;
  padding: 1rem;
  position: relative;
  background: linear-gradient(to left, #7573FF, rgba(114, 221, 247,0.5));
  padding: 5px;
  border-radius:50%;
  padding-top:auto;
padding-bottom:auto;
margin-left:45%;

}

.module {

    width:140px;
  height:140px;
  background: #ffffff;
  color:#6070FF;
  font-weight:bold;
  font-size:18px;
  text-align:center;

  padding-top:30%;

  border-radius:50%;
}
                .col-md-9{
                    margin-top:10px;
                margin-bottom:20px;
                }
                .buttons {
                    display: block;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #7DC595;
                    border-radius: 18px;
                    padding: 15px 32px;
                    color: white;
                    font-weight: bold;
                }

                .buttons:hover {
                    background-color: white;
                    color: #7DC595;
                    border: 2px solid #838FFF;
                }

                .inputmasuk2 {
                    background-color: #fffefe;
                    border-radius: 15px;
                    padding: 10px;


                }
                .col-md-3{
                    margin-top:100px;
                    margin-bottom:-100px;

                }
                .col-md-4{
                    margin-top:10px;
                    margin-right:30px;
                }

                .bg-profil {
                    background-color: white;
                    padding-top: 30px;
                    padding-bottom: 20px;
                    border-top-left-radius: 60px 30px;
                    border-top-right-radius: 60px 30px;
                    box-shadow: 0px -10px 5px  #5b5757c8;

                }

                .button {
                    background-color: #D9D9D9;
                    border: none;
                    color: black;
                    border-radius: 18px;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                }

                .tab {
                    overflow: hidden;
                }

                /* Style the buttons inside the tab */
                .tab a {
                    background-color: inherit;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    transition: 0.3s;
                    font-size: 18px;
                    margin-left:60px;
                    color:#8C8C8C;
                    font-weight: bold;

                }

                /* Change background color of buttons on hover */
                .tab a:hover {
                    background-color: #ddd;
                }

                /* Create an active/current tablink class */
                .tab a.active {
                    font-weight:bold;
                    text-decoration-line: underline;
                    text-decoration-thickness: 3px;
                    color:#7C88F2;
                }

                /* Style the tab content */
                .tabcontent {

                    padding-left:20px;
                    padding-top:20px;
                    border-top: none;
                    flex-wrap:wrap
                }
                .flex-container3 {
                    display: flex;
                    justify-content: center;
                    margin-top: 40px;

                }

                .flex-container3 .c3 {
                    background-color: #FFEA7C;
                    width: 280px !important;
                    text-align: justify;
                    line-height: 75px;
                    font-size: 18px;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    padding:20px;
                }

                .flex-container2 {
                    display: flex;
                    justify-content: center;
                    margin-top: 40px;

                }

                .flex-container2 .c2 {
                    background-color: #FFEA7C;
                    width: 580px;
                    text-align: center;
                    line-height: 75px;
                    font-size: 30px;
                    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                    margin-bottom: 20px;
                    border-radius: 20px;
                    padding-bottom: 60px;
                }

                .flex-container2 .c3 {
                    background-color: rgba(247, 174, 248, 0.8);
                    width: 150px;
                    text-align: center;
                    line-height: 75px;
                    font-size: 40px;
                    font-weight: bolder;
                    margin-top: auto;
                    margin-bottom: auto;
                    margin-left: -40px;
                    margin-right: -40px;
                    padding-top: 30px;
                    padding-left: 15px;
                    padding-bottom: 30px;
                    padding-right: 15px;
                    z-index: 2;
                    border-radius: 55%;
                }

                .img2 {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 70px 20px 20px 20px;
                    width: 250px;
                }

                .logomasuk {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    padding: 70px 20px 20px 20px;
                    width: 200px;
                }

                .logodaftar {
                    display: block;
                    margin-top: 60px;
                    margin-left: auto;
                    margin-right: auto;
                    padding-right: 10px;
                    width: 120px;
                }

                h1 {
                    font-size: 48px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: 500px;
                    margin-bottom: 20px;
                }

                h2 {
                    font-size: 24px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: 400;
                    margin-bottom: 80px;
                }

                .button1 {
                    display: block;
                    width: 200px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: white;
                    margin-bottom: 100px;
                    border-radius: 25px;
                    color: #838FFF;
                }

                .button1:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }

                /*laman masuk sebaga*/
                .buttonmasuksebagai {
                    background-color: white;
                    color: #6070FF;
                    border-radius: 25px;
                    display: block;
                    width: 300px;
                    margin-left: auto;
                    margin-right: auto;
                    padding-left: auto;
                    padding-right: auto;
                    font-family: 'poppins', 'sans-serif';
                    font-weight: bolder;
                    padding: 20px;
                    font-size: 20px;
                }

                .buttonmasuksebagai:hover {
                    background-color: rgba(255, 255, 255, 0.669);
                    color: #6070FF;
                    border: 2px solid #6070FF;
                }

                .teksmasuk {
                    text-align: center;
                    font-size: 20px;
                    color: white;
                    margin-top: -30px;
                    font-family: 'Poppins', 'sans serif';
                    font-weight: 500px;
                }

                .logosekul {
                    width: 90px;
                    height: auto;
                    padding-right: 20px;
                    margin-left: -40px;
                    margin-right: 40px;
                }

                .logoorangtua {
                    width: 90px;
                    height: auto;
                    padding-right: 20px;
                    margin-left: -30px;
                    margin-right: 30px;
                }

                .button2 {
                    display: block;
                    width: 120px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: white;
                    border-radius: 20px;
                    color: #838FFF;
                    font-weight: bold;
                }

                .button2:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }

                .button3 {
                    display: block;
                    width: 100px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    border-radius: 25px;
                    color: white;
                    font-weight: bold;
                }

                .button3:hover {
                    background-color: white;
                    color: #838FFF;
                    border: 2px solid #838FFF;
                }

                .ScrollStyle {
                    display: block;
                    height: 400px;
                    overflow-y: scroll;

                }

                /* width */
                .ScrollStyle::-webkit-scrollbar {
                    width: 15px;

                }

                /* Track */
                .ScrollStyle::-webkit-scrollbar-track {
                    background: #f1f1f1;
                    border-radius: 10px;

                }

                /* Handle */
                .ScrollStyle::-webkit-scrollbar-thumb {
                    background: #E0E0FC;
                    height:50px;border-radius:10px;
                }

                /* Handle on hover */
                .ScrollStyle::-webkit-scrollbar-thumb:hover {
                    background: #555;
                }

                .textdaftar {
                    text-align: center;
                    font-size: 24px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: 400;
                }

                .textsudahpunyaakun {
                    margin-top: 20px;
                    text-align: center;
                    font-size: 15px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: 500;
                }

                .link1 {
                    color: #7C88F2;
                    font-size: 18px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: bolder;
                    text-decoration: underline;
                    margin-left: auto;
                    margin-right: auto;
                }

                .link1:hover {
                    color: #7c88f2a1;
                    font-size: 18px;
                    font-family: 'Poppins', sans-serif;
                    font-weight: bolder;
                    text-decoration: none;
                    margin-left: auto;
                    margin-right: auto;
                }

                .teksberanda1 {
                    font-size: 36px;
                    color: black;
                    font-family: 'Poppins', 'Sans-serif';
                    text-align: center;
                    letter-spacing: 1px;
                }

                .carousel-indicators button {
                    height: 10px !important;
                    width: 10px !important;
                    margin-top: 120px !important;
                    border-radius: 100%;
                    background-color: #D9D9D9 !important;
                    margin-bottom: -50px !important;
                }

                .carousel-indicators button.active {
                    height: 10px !important;
                    width: 10px !important;
                    margin-top: 120px !important;
                    border-radius: 100%;
                    background-color: rgba(247, 174, 248, 0.55) !important;
                    margin-bottom: -50px !important;
                }


                .carousel-control-prev,
                .carousel-control-next {
                    color: black;
                    width: 40px;

                }

                .carousel-control-prev-icon,
                .carousel-control-next-icon {
                    height: 100px;
                    width: 100px;
                    background-size: 100%, 100%;
                    border-radius: 50%;
                    background-image: none;


                }

                .carousel-control-next-icon:after {
                    content: url(/data_file/Vector.png);
                    margin-left: 10px;
                    margin-right: 0px;
                }

                .carousel-control-prev-icon:after {
                    content: url(/data_file/Vector1.png);
                    margin-left: 10px;
                    margin-right: 0px;
                }

                .batasberanda {}

                .search1 {
                    display: flex;
                    justify-content: center;
                }

                .search-bar {
                    width: 100%;
                    max-width: 600px;
                    background-color: #3B3B3D;
                    display: flex;
                    align-items: center;
                    border-radius: 60px;
                    padding: 5px 15px;
                }

                .search-bar input {
                    background: transparent;
                    flex: 1;
                    border: 0;
                    outline: none;
                    padding: 5px 15px;
                    font-size: 20px;
                    color: white;
                }

                .search-bar button img {
                    width: 25px;
                }

                .search-bar button {
                    border: 0;
                    border-radius: 50%;
                    width: 60px;
                    background: transparent;
                    cursor: pointer;
                }

                .card {
                    margin-top: 40px;
                    margin-bottom: 40px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
                    padding: 30px;
                    text-align: center;
                    background-color: white;
                    font-family: 'Poppins', 'Sans-serif';
                }

                .select-box {
                    position: relative;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 30px;
                }

                .select-option {
                    position: relative;
                }

                .select-option input {
                    width: 100%;
                    background-color: #D9D9D9;
                    color: black;
                    border-radius: 7px;
                    cursor: pointer;
                    font-size: 22px;
                    padding: 5px 10px;
                    border: 0 !important;
                    outline: 0 !important;
                }

                .select-option:after {
                    content: url(/data_file/Dropdown.png);
                    position: absolute;
                    right: 15px;
                    top: 40%;
                }

                .content1 {
                    background-color: white;
                    position: absolute;
                    color: black;
                    border-radius: 7px;
                    margin-top: 1px;
                    width: 100%;
                    z-index: 999;
                    padding: 10px;
                    display: none;
                }

                .search input {
                    width: 100%;
                    font-size: 17px;
                    padding: 10px;
                    outline: 0;
                    border: 1px solid #b3b3b3;
                    border-radius: 5px;
                }

                .options {
                    margin-top: 10px;
                    max-height: 150px;
                    overflow-y: auto;
                    padding: 0;
                }

                .options li {
                    padding: 10px 15px;
                    font-size: 16px;
                    cursor: pointer;
                    border-bottom: 1px solid black;
                }

                .options li:hover {
                    background-color: #f2f2f2;
                }

                .select-box.active .content1 {
                    display: block;
                }

                .select-box.active .select-option:after {
                    transform: rotate(-180deg);
                }

                .select-box2 {
                    position: relative;
                    margin-left: auto;
                    margin-right: auto;
                    margin-bottom: 30px;
                }

                .select-option2 {
                    position: relative;
                }

                .select-option2 input {
                    width: 100%;
                    background-color: #D9D9D9;
                    color: black;
                    border-radius: 7px;
                    cursor: pointer;
                    font-size: 22px;
                    padding: 5px 10px;
                    border: 0 !important;
                    outline: 0 !important;
                }

                .select-option2:after {
                    content: url(/data_file/Dropdown.png);
                    position: absolute;
                    right: 15px;
                    top: 65%;
                }

                .content2 {
                    background-color: white;
                    position: absolute;
                    color: black;
                    border-radius: 7px;
                    margin-top: 1px;
                    width: 100%;
                    z-index: 999;
                    padding: 10px;
                    display: none;
                }

                .search2 input {
                    width: 100%;
                    font-size: 17px;
                    padding: 10px;
                    outline: 0;
                    border: 1px solid #b3b3b3;
                    border-radius: 5px;
                }

                .options2 {

                    max-height: 150px;
                    overflow-y: auto;
                    padding: 0;
                }

                .options2 li {
                    padding: 10px 15px;
                    font-size: 16px;
                    cursor: pointer;
                    border-bottom: 1px solid black;
                }

                .options2 li:hover {
                    background-color: #f2f2f2;
                }

                .select-box2.active2 .content2 {
                    display: block;
                }

                .select-box2.active2 .select-option2:after {
                    transform: rotate(-180deg);

                }

                .bg-bandingkan1 {
                    background-color: #FFEA7C;
                    padding: 20px;
                    margin-top: 50px;
                    margin-right: 50px;
                    margin-left: 50px;
                    margin-bottom: 200px;
                    border-radius: 20px;
                }

                .bg-bandingkan2 {
                    background-color: white;
                    padding: 25px;
                    margin: 10px;
                    border-radius: 20px;
                }

                .bg-bandingkan3-1 {
                    display: block;
                    background-color: yellow;
                    text-align: center;
                    padding: 20px !important;
                    width: 530px;
                    margin-left: 20px;
                    margin-right: 20px;
                    margin-top: 40px;
                    margin-bottom: 20px;
                    margin-top: 20px;
                }

                .button4 {
                    display: block;
                    width: 85%;
                    margin-left: 20px;
                    background-color: #D9D9D9;

                    color: #000000;
                    margin-top: 30px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    font-size: 18px;
                    font-family: 'Poppins', 'Sans-Serif';
                    font-weight: 500 !important;
                }

                .active3,
                .button4:hover {
                    background-color: rgba(217, 217, 217, 0.7);
                    border-bottom-left-radius: 0px;
                    border-bottom-right-radius: 0px;
                }

                .button4:after {
                    content: '\002B';
                    color: #000000;
                    font-weight: bold;
                    float: right;
                    margin-left: 5px;
                }

                .active3:after {
                    content: "\2212";
                }

                .panel {
                    padding: 0 18px;
                    background-color: rgba(255, 255, 255, 0.7);
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.2s ease-out;
                    width: 85%;
                    margin-left: 20px;
                    margin-right: 25px;
                }

                .button5 {
                    display: block;
                    width: 85%;
                    margin-left: 45px;
                    background-color: #D9D9D9;

                    color: #000000;
                    margin-top: 30px;
                    padding-top: 10px;
                    padding-bottom: 10px;
                    font-size: 18px;
                    font-family: 'Poppins', 'Sans-Serif';
                    font-weight: 500 !important;
                }

                .active4,
                .button5:hover {
                    background-color: rgba(217, 217, 217, 0.7);
                    border-bottom-left-radius: 0px;
                    border-bottom-right-radius: 0px;
                }

                .button5:after {
                    content: '\002B';
                    color: #000000;
                    font-weight: bold;
                    float: right;
                    margin-left: 5px;
                }

                .active4:after {
                    content: "\2212";
                }

                .panel2 {
                    padding: 0 18px;
                    background-color: rgba(255, 255, 255, 0.7);
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.2s ease-out;
                    width: 85%;
                    margin-left: 45px;
                }

                .linkdaftar {
                    color: white;
                }

                .linkdaftar:hover {
                    color: #000000;
                }
                .bg-bandingkan4{
                    background-color:white;
                    padding:20px;
                    margin:10px;
                    width: 400px;
                    border-radius:20px;


                }
                .button7 {
                    display:block;
                    width: 400px;
                    padding:20px;
                    margin-left: auto;
                    margin-right: auto;
                    background-color: #838FFF;
                    margin-bottom: 70px;
                    border-radius: 20px;
                    color: #ffffff;
                    align-items: right;
                    font-size: 17px;
                     font-family: 'Poppins', 'Sans-serif';
                    font-weight: bolder;
                    text-align: center;
                }
                .button7:hover {
                    background-color: #838FFF;
                    color: white;
                    border: 2px solid white;
                }


            }
        }

        @media (max-width: 4000px) {
            .img5 {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
        }

        a {
            text-decoration: none;
            color: #838FFF;
        }

        a.style1:hover {
            text-decoration: none;
            color: black;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
        .center2 {
            display:block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
        }
        .center3 {
            display:block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }

        .inputmasuk {
            background-color: #D9D9D9;
            border-radius: 15px;
            padding: 10px;

        }
    </style>
</head>

<body>
    <div class="container">
        @yield('atas')
        @yield('tengah')
        @yield('akhir')
        <br>
    </div>
    @yield('bawah')
</body>

</html>
