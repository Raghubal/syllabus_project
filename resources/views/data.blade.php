 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce9c404965.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body,
        button{
            font-family: 'Poppins', sans-serif;
        }

        .header{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color:  #1d3557;
            padding: 15px 10px;
        }
        .logo{
            width: 450px;
            background-color:  #1d3557;
        }

        .logout_btn {
            border: none;
            outline: none;
            padding: .7rem 16px;
            border-radius: 5px;
            text-decoration: none;
            color: #fff;
            background-color: crimson;
        }
        .flex-box{
            display: flex;

        }
        .side-bar{
            height: 610px;
            width: 250px;
            background-color: rgb(60, 53, 53);
            color: white;
        }
        .side-bar h1 {
            margin: 1rem 0 2rem 0;
            font-size: 24px;
        padding-left: 25px;
        }
        .side-bar p {
            width: 250px;
            margin-bottom: 1.5rem;
            padding-left: 25px;
            padding-right: 150px;
        }
        .side-bar p:hover{
            width: 250px;
            padding: 10px 20px 10px 20px;
            background-color: rgba(49, 16, 148, 0.07);
            border: 1px solid rgba(253, 161, 161, 0.07);
            border-left: 2px solid rgb(251, 165, 165);
            color: aliceblue;
            box-shadow: 2px 2px rgba(253, 161, 161, 0.07);
            cursor: pointer;
        }
        #customers {
            border-collapse: collapse;
            width: 100 %;
            height: 25%;
            margin-top: 1rem;
            text-align: center;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 2px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #403636;
        color: #fff;
        }
    </style>
<body>




<nav class="header" >
    <img class="logo" src="assests/bu_logo.png">
    <a href='/login' class="logout_btn">Logout</a>
</nav>

<div class="flex-box">

    <div class="side-bar">
        <h1>STUDENT</h1>

    </div>
            <table border="1" id="customers">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>YEAR</th>
                        <th>SEMESTER</th>
                        <th>DEPARTMENT</th>
                        <th>PROGRAM</th>
                        <th>PDF</th>
                    </tr>
                </thead>
                <tbody>




                    @foreach($data as $i )
                     <tr>
                        <td>{{$i->id }}</td>
                        <td>{{$i->year }}</td>
                        <td>{{$i->semester }}</td>
                        <td>{{$i->department}}</td>
                        <td>{{$i->program }}</td>
                        <td>{{$i->pdf }}</td>
                      <br>
                    </tr>
                    @endforeach



                 </tbody>

            </table>




        </div>
    </div>


</body>
</html>

