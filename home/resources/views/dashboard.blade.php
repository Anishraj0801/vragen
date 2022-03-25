<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vragen-home</title>
<<<<<<< Updated upstream

    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="icon" href="https://thumbs.dreamstime.com/b/vn-logo-design-initial-letter-sci-fi-style-game-esport-technology-digital-community-business-v-n-sport-modern-italic-192979294.jpg" type="image/x-icon">
=======
    <link rel="icon" href="https://thumbs.dreamstime.com/b/vn-logo-design-initial-letter-sci-fi-style-game-esport-technology-digital-community-business-v-n-sport-modern-italic-192979294.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


      
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
      }
      
      label {
        padding: 12px 12px 12px 0;
        display: inline-block;
      }
      
      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
      }
      
      input[type=submit]:hover {
        background-color: #047da1;
      }
      
      .container {
        border-radius: 90px;
        background-color: #fdfcfc;
        padding: 50px;
      }
      
      .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
      }
      
      .col-75 {
        float: left;
        width: 100%;
        margin-top: 6px;
        height: 200%;
      }
      
      
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
      
      
      @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
        }
      }




        /*********************Anish*******************/
        .main {
            width: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%), url(https://wallpaperaccess.com/full/2292810.jpg);
            background-position: center;

            background-size: cover;
            height: 100vh;
        }

        .navbar {
            width: 1500px;
            height: 75px;
            margin-left: 400px;
        }

        .icon {
            width: 200px;
            float: left;
            height: 70px;
        }

        .logo {
            color: #ff7200;
            font-size: 35px;
            font-family: Arial;
            padding-left: 20px;
            float: left;
            padding-top: 10px;
            margin-top: 5px;

        }

        .menu {
            width: 400px;
            float: left;
            height: 70px;
        }

        ul {
            float: left;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        ul li {
            list-style: none;
            margin-left: 62px;
            margin-top: 27px;
            font-size: 14px;

          
        }

        ul li a {
            text-decoration: none;
            color: #fff;
            font-family: Arial;
            font-weight: bold;
            transition: 0.4s ease-in-out;
        }

        ul li a:hover {
            color: #ff7200;
        }

        .search {
            width: 330px;
            float: left;
            margin-left: 270px;
        }

        .srch {
            font-family: 'Times New Roman';
            width: 200px;
            height: 40px;
            background: transparent;
            border: 1px solid #ff7200;
            margin-top: 13px;
            color: #fff;
            border-right: none;
            font-size: 16px;
            float: left;
            padding: 10px;
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
        }

        .btn {
            width: 100px;
            height: 40px;
            background: #ff7200;
            border: 2px solid #ff7200;
            margin-top: 13px;
            color: #fff;
            font-size: 15px;
            border-bottom-right-radius: 5px;
            border-bottom-right-radius: 5px;
            transition: 0.2s ease;
            cursor: pointer;
        }

        .btn:hover {
            color: #000;
        }

        .btn:focus {
            outline: none;
        }

        .srch:focus {
            outline: none;
        }

        .content {
            width: 1200px;
            height: auto;
            margin: auto;
            color: #fff;
            position: relative;
        }

        .content .par {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .content h1 {
            font-family: 'Times New Roman';
            font-size: 50px;
            padding-left: 20px;
            margin-top: 9%;
            letter-spacing: 2px;
        }
        width
        .content .cn {
            width: 160px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: .4s ease;

        }

        .content .cn a {
            text-decoration: none;
            color: #000;
            transition: .3s ease;
        }

        .cn:hover {
            background-color: #fff;
        }

        .content span {
            color: #ff7200;
            font-size: 65px
        }

        .form {
            width: 250px;
            height: 380px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8)50%, rgba(0, 0, 0, 0.8)50%);
            position: absolute;
            top: -20px;
            left: 870px;
            transform: translate(0%, -5%);
            border-radius: 10px;
            padding: 25px;
        }

        .form h2 {
            width: 220px;
            font-family: sans-serif;
            text-align: center;
            color: #ff7200;
            font-size: 22px;
            background-color: #fff;
            border-radius: 10px;
            margin: 2px;
            padding: 8px;
        }

        .form input {
            width: 240px;
            height: 35px;
            background: transparent;
            border-bottom: 1px solid #ff7200;
            border-top: none;
            border-right: none;
            border-left: none;
            color: #fff;
            font-size: 15px;
            letter-spacing: 1px;
            margin-top: 30px;
            font-family: sans-serif;
        }

        .form input:focus {
            outline: none;
        }

        ::placeholder {
            color: #fff;
            font-family: Arial;
        }

        .btnn {
            width: 240px;
            height: 40px;
            background: #ff7200;
            border: none;
            margin-top: 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            color: #fff;
            transition: 0.4s ease;
        }

        .btnn:hover {
            background: #fff;
            color: #ff7200;
        }

        .btnn a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .form .link {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 17px;
            padding-top: 20px;
            text-align: center;
        }

        .form .link a {
            text-decoration: none;
            color: #ff7200;
        }

        .liw {
            padding-top: 15px;
            padding-bottom: 10px;
            text-align: center;
        }

        .icons a {
            text-decoration: none;
            color: #fff;
        }

        .icons ion-icon {
            color: #fff;
            font-size: 30px;
            padding-left: 14px;
            padding-top: 5px;
            transition: 0.3s ease;
        }

        .icons ion-icon:hover {
            color: #ff7200;
        }
    </style>
>>>>>>> Stashed changes

</head>


<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">VRAGEN</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="" >ANSWER</a></li>


                    <li><a href="" data-toggle="modal" data-target="#exampleModalCenter">ADD QUESTION</a></li>





                    <!-- Button trigger modal -->


                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">ADD QUESTION</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{url('/')}}/data" method="post">
                                @csrf     
                                 <div class="form-group">
                                     <div class="form-group">
                  
                                             <div class="col-form-label">
                                                <label for="message-text">Category</label>
                                            </div>
                  
                                                     <div class="col-75">                  
                                                       <select id="require" name="category" > 
                                                       <option value="">select your Category</option>
                                                        @foreach ($cat as $data )
                                                       <option  name=" ">{{$data['category_name']}}</option>
                                                        @endforeach
                
                                                       </select>
                                                     </div>
                                              
                                               @error('category')
                                               <span class="text-danger">
                                               {{$message}}
                                              </span>
                                               @enderror
                                              
                                     </div>
                                    
                             
                                      <div class="form-group">
                                            <label for="message-text" class="col-form-label">Add Question:</label>
                                            <textarea class="form-control"  name="des" value="{{old('name')}}" placeholder="Start your Question with ' What ',' How ',' Why ' ect." id="message-text" ></textarea>
                                              @error('des')
                                              <span class="text-danger">             
                                                {{$message}}               
                                              </span>
                                              @enderror
                                      </div>
                           
                  
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit Question</button>
                                      </div>
                                     
                                     </div>         
                        </div>
                        
                    </form>
                             

                      </div>
                    </div>
                  </div>

                    <li><a href="#">PROFILE</a></li>
                    <li><a href="logout">LOGOUT</a></li>
                </ul>
            </div>


            {{-- /************************************************************/


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">QUESTION BLOG</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
    </div>
    <div class="modal-body">
    
      <div class="container" style="width: 64%">
        <form action="{{url('/')}}/question" method="post">
          @csrf
        <div class="row">
          <div class="row">
          <div class="col-25">
            <label for="country">Category</label>
          </div>
          <div class="col-75">
            <select name="category">
              <option value="">---Select your category---</option>
              @foreach ($cat as $dat)
                
              <option name="">{{$dat['name']}}</option>
             
              @endforeach
            </select>
           
          </div>
         
        </div>
        @error('category')
        <span class="text-danger">{{$message}}</span>
          
        @enderror
        <div class="row">
          <div class="col-25">
            <label for="subject">Question</label>
          </div>
          <div class="col-75">
            <textarea value="{{old('question')}}" name="question" placeholder="Write your question.." style="height:200px"></textarea>
          </div>
          
        </div>
        @error('question')
          <span class="text-danger">{{$message}}</span>
            
          @enderror
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">ADD QUESTION</button>
          
          </div>
          
    </form>
    </div>
    
    </div>
    </div>
    </div>  --}}





{{-- /************************************************************************************* --}}



            <div class="search">
                <form action="" method="">
                    <input class="srch" type="search" name="search" placeholder="Search Question">
                    <button class="btn" type="submit">Search</button>
                </form>
            </div>
            

        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>  
        
 </div>
</nav>


@if(session('status'))
<div class="alert alert-success" role="alert">
  {{session('status')}}
</div>
@endif

</body>

</html>