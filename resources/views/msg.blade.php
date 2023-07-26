<!DOCTYPE html>
<html>
<head>
  
  <title>Miverr</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-***" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta name="theme-color" content="#fafafa">

  <style>
.notification-container{
  z-index: 333;
  width: 15%;
  height: 250px;
  cursor: default;
  background-color:green;
  position: absolute;
  top: 47%; /* This will position the cart panel below the cart icon */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add some shadow for a better appearance */
  border-radius: 10px;
  display: none;
  flex-direction: column;
  right: 13%;   
  } 

.user-avatar {
  width: 24px; /* Set the desired width and height for the circular avatar */
  height: 24px;
  border-radius: 50%; /* Apply circular border-radius to make the image circular */
  object-fit: cover; /* Ensure the image fills the circular space without distortion */
  
}
.cart-container{
  z-index: 333;
  width: 15%;
  height: 250px;
  cursor: default;
  background-color:green;
  position: absolute;
  top: 47%; /* This will position the cart panel below the cart icon */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add some shadow for a better appearance */
  border-radius: 10px;
  display: none;
  flex-direction: column;
  right: 10%;
      
}
.profile-container{
  z-index: 333;
  cursor: default;
  background-color:white;
  position: absolute;
  top: 47%; /* This will position the cart panel below the cart icon */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add some shadow for a better appearance */
  text-align: left;
  display: none;
  flex-direction: column;
  right: 1%;
  padding: 5px;
  font-size:12px;
  
}

.notification-item {
  margin-bottom: 5px;
}

.top {
  height: 10%;
  overflow: hidden;
  
  display: flex;
  align-items: center;
  justify-content: center;
}

.top h2 {
  margin-top:12px;
  padding: 30px;
  font-size: 15px;
  color: black;
  
}

.main {
  height: 80%;
  overflow-y: auto;
  padding: 2px;
  color:black;
  font-size: 12px;
}

.footer {
  height: 10%;
  
  display: flex;
  align-items: center;
  justify-content: center;
}

.count {
  position: absolute;
  /* Adjust this value to position the dot correctly */
  width: 8px; /* Customize the width of the dot */
  height: 8px; /* Customize the height of the dot */
  background-color: red; /* Customize the background color of the dot */
  border-radius: 50%; /* Make the dot display as a circle */
}
.main .notification-item.odd {
  padding: 4px;
  border-bottom: 1px solid #e0e0e0;
  text-align: left;
  background-color: #f9f9f9; /* Custom background color for odd items */
}

/* Style for each even notification item */
.main .notification-item.even {
  margin-top:1px;
  margin-bottom:1px;
  padding: 4px;
  border-bottom: 1px solid #e0e0e0;
  text-align: left;
  background-color: #f0f0f0; /* Custom background color for even items */
}

.main .notification-item:last-child {
  border-bottom: none;
}

/* Hover effect for odd notification items */
.main .notification-item.odd:hover {
  background-color: #e5e5e5; /* Custom hover color for odd items */
}

/* Hover effect for even notification items */
.main .notification-item.even:hover {
  background-color: #d9d9d9; /* Custom hover color for even items */
}


</style>
  
</head>
<body>

  <!-- Add your site or application content here -->
  <header class="header sticky-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="left">
            <div class="row">
              <div class="col-lg-2">
                <div class="logo">
                  <a href="">Miverr</a>
                </div>
              </div>
              <div class="col-lg-10" id="header-search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Find Service" aria-label="Recipient's username" aria-describedby="basic-addon2">                    
                    <div class="input-group-append ml-3">
                    <button class="search btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right">
              <nav class="header-right-menu">
               
                    <ul>
                      <li id="notification">
                            <p>
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span class="count"></span>
                            </p>
                            
                            <div class="notification-container">
                              <div class="top">
                                <h2>Notifications</h2>
                              </div>
                              <div class="main">
                                <!-- Content of main div with overflow-y: auto; -->
                                <div class="notification-item odd">Notification 1 Notification 1 Notification 1 Notification 1 Notification 1 Notification 1 Notification 1</div>
                                <div class="notification-item even">Notification 2</div>
                                <div class="notification-item odd">Notification 3</div>
                                <div class="notification-item even">Notification 4</div>
                                <div class="notification-item odd">Notification 5</div>
                                <div class="notification-item even">Notification 6</div>
                                <div class="notification-item odd">Notification 7</div>
                                <div class="notification-item even">Notification 8</div>
                                <div class="notification-item odd">Notification 9</div>
                                <div class="notification-item even">Notification 10</div>
                                <div class="notification-item odd">Notification 11</div>
                                <div class="notification-item even">Notification 12</div>
                                <div class="notification-item odd">Notification 13</div>
                                <div class="notification-item even">Notification 14</div>
                                <div class="notification-item odd">Notification 15</div>

                              </div>
                              <div class="footer">
                                <a href="#" style="text-decoration: underline; color:black; font-size: 12px;">mark as read</a>
                              </div>
                            </div>
                      </li>

                      <li id="cart">
                        <p>
                          <i class="fa fa-comments" aria-hidden="true"></i>
                            <span class="count"></span>
                          </p>
                        <div class="cart-container">
                          <div class="top">
                            <h2>Chat</h2>
                          </div>
                          <div class="main">
                            <!-- Content of main div with overflow-y: auto; -->
                            <div class="notification-item odd">chat 1 </div>
                             
                          </div>
                          <div class="footer">
                            <a href="#" style="text-decoration: underline; color:black; font-size: 12px;"> all messages </a>
                          </div>
                        </div>
                      </li>

                      <li id="order">
                        <p>Orders</p>
                        
                      </li>

                      <li id="profile">
                        <p>
                            <img class="user-avatar" src="{{ asset('uploads/'.Auth::user()->id.'.jpg') }}" alt="User Image">
                        </p>
                        <div class="profile-container" id="userDropdown">
                          <div class="notification-item odd"><a href="" class="profile-item even">Profile</a></div>
                          <div class="notification-item even"><a href="#" class="profile-item odd">Setting</a></div>
                          <div class="notification-item even"><a href="#" class="profile-item odd">Change Password</a></div>
                          <div class="notification-item even"><a href="" class="profile-item odd">Logout</a></div>
          
                        </div>
                      </li>
                    </ul>
               
            </nav>
                     
          </div>
        </div>
      </div>
    <nav class="header-bottom-menu">
        <ul>
            <li>
            <a href="">Graphics & Design</a>
            <ul class="subcategories">
                <li><a href="#">Logo Design</a></li>
                <li><a href="#">Illustration</a></li>
                <!-- Add more subcategories here -->
            </ul>
            </li>
            <!-- Repeat the above structure for other categories -->
            <li>
                <a href="">Digital Marketing</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="">Writing & Translation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="">Video & Animation</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="">Music & Audio</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="">Programming & Tech</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
            <a href="">Photography</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>
            <li>
                <a href="">Business</a>
                <ul class="subcategories">
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">SEO</a></li>
                    <!-- Add more subcategories here -->
                </ul>
            </li>            
        </ul>
    </nav>

    </div>
  </header>


    <main>
         @include('vendor.Chatify.pages.app')
    </main>


    <footer class="footer-top">
      
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="f-t-left">
            <div class="row">
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>Categories s</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Graphics & Design</a></li>
                      <li><a href="#">Digital Marketing</a></li>
                      <li><a href="#">Writing & Translation</a></li>
                      <li><a href="#">Video & Animation</a></li>
                      <li><a href="#">Music & Audio</a></li>
                      <li><a href="#">Programming & Tech</a></li>
                      <li><a href="#">Business</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Sitemap</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>About t</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Press & News</a></li>
                      <li><a href="#">Partnerships</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms of Service</a></li>
                      <li><a href="#">Intellectual Property Claims</a></li>
                      <li><a href="#">Investor Relations</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="f-r-box">
                  <h4>Support</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Help & Support</a></li>
                      <li><a href="#">Trust & Safety</a></li>
                      <li><a href="#">Selling on Miverr</a></li>
                      <li><a href="#">Buying on Miverr</a></li>                 
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="f-t-right">
            <div class="row">
              <div class="col-lg-6">
                <div class="f-r-box">
                  <h4>Community</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Events</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Forum</a></li>
                      <li><a href="#">Community Standards</a></li>                 
                      <li><a href="#">Podcast</a></li>                 
                      <li><a href="#">Affiliates</a></li>                 
                      <li><a href="#">PodInvite a Friendcast</a></li>                 
                      <li><a href="#">Become a Seller</a></li>                 
                      <li><a href="#">Miverr Elevate <br> <small>Exclusive Benefits</small></a></li>                                 
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="f-r-box">
                  <h4>More From Miverr</h4>
                  <nav>
                    <ul>
                      <li><a href="#">Miverr Pro</a></li>
                      <li><a href="#">Miverr Studios</a></li>
                      <li><a href="#">Miverr Logo Maker</a></li>
                      <li><a href="#">Miverr Guides</a></li>                 
                      <li><a href="#">Get Inspired</a></li>                 
                      <li><a href="#">ClearVoice <br>
                        <small>Content Marketing</small> </a></li>                 
                      <li><a href="#">AND CO <br>
                        <small>Invoice Software</small> </a></li>                 
                      <li><a href="#">Learn <br>
                        <small>Online Courses</small> </a></li>                                                                      
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <footer class="footer-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="f-b-left">
            <p><span>miverr</span>© Miverr International Ltd. 2020</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="f-b-right">
            <nav>
              <ul>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><span><i class="fas fa-globe"></i></span>English</a></li>
                <li><a href="#">$USD</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="../js/bootstrap-popover-x.js" type="text/javascript"></script>

  <script>
  if (window.location.href !== "http://localhost/miverr/") {
  var headerSearch = document.getElementById('header-search');
  var headerBottomMenu = document.querySelector('.header-bottom-menu');

  headerBottomMenu.classList.add('show');
  headerSearch.classList.add('show');
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Show cart container on cart icon click
        $('#cart').on('click', function() {
          $('.profile-container').hide();
            $('.notification-container').hide();
            $('.cart-container').show();
cons

        $.ajax({
                url: '/get-message', 
                method: 'GET', 
                dataType: 'json', 
                success: function(data) {
                  console.log('Received messages:', data);
                  var mainDiv = $('.cart-container .main');
                  mainDiv.empty(); 

                  
                  for (var i = 0; i < data.length; i++) {
                    var messageItem = $('<div class="notification-item"></div>');
                    messageItem.text(data[i].userName + ': ' + data[i].message + ' (' + data[i].sendingTime + ')');
                    mainDiv.append(messageItem);
                  }
                },
                error: function(xhr, status, error) {
                 
                  console.error('Error fetching messages:', error);
                }

        }); 
      });


        // Show notification container on notification icon click
        $('#notification').on('click', function() {
            $('.cart-container').hide();
            $('.profile-container').hide();
            $('.notification-container').show();
        });
        $('#profile').on('click', function() {
            $('.cart-container').hide();
            $('.notification-container').hide();
            $('.profile-container').show();
        });

        // Hide both containers when clicking outside them
        $(document).on('click', function(event) {
            if (
                !$(event.target).closest('#cart, #notification, #profile').length &&
                !$(event.target).closest('.cart-container, .notification-container,.profile-container').length
            ) {
                $('.cart-container, .notification-container, .profile-container').hide();
            }
        });
    });

 
</script>



<script>
        $(document).ready(function() {
            $('#popoverButton').click(function() {

              
                var popover = $(this);

                $.ajax({
                    url: '/get-notification-data',
                    type: 'GET',
                    success: function(response) {
                        // Process the response and update the popover content
                        var content = '';

                        if (response.length > 0) {
                            for (var i = 0; i < response.length; i++) {
                                var notification = response[i];
                                var message = notification.message;

                                content += '<p style="background color:blue;">' + message + '</p>';
                            }
                        } else {
                            content = '<p>No notifications found.</p>';
                        }

                        $('#popoverContent').html(content);

                        // Show the popover
                        popover.popover('show');
                    },
                    error: function(xhr, status, error) {
                        // Handle error if necessary
                        console.log(error);
                    }
                });

                return false;
            });
        });
    </script>

</body>

</html>
 


