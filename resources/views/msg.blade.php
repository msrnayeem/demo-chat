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
  width: 210px;
  height: 250px;
  cursor: default;
  background-color:#ebebeb;
  position: absolute;
  border-radius: 10px;
  display: none;
  flex-direction: column;
  } 
#notification {
  position: relative;
}

.user-avatar {
  width: 24px; /* Set the desired width and height for the circular avatar */
  height: 24px;
  border-radius: 50%; /* Apply circular border-radius to make the image circular */
  object-fit: cover; /* Ensure the image fills the circular space without distortion */
  
}
.messenger-container{
  z-index: 333;
  width: 200px;
  height: 250px;
  cursor: default;
  background-color:#ebebeb;
  position: absolute;
  border-radius: 8px;
  display: none;
  flex-direction: column;  
}
#messenger {
  position: relative;
}

/* Adjust the top property to position the .messenger-container below the icon */
#messenger .messenger-container {
  top: calc(100%); /* Adjust the margin (10px) as needed */
}
.profile-container{
  z-index: 333;
  cursor: default;
  background-color:white;
  position: absolute;
  text-align: left;
  display: none;
  flex-direction: column;
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
  overflow-x: hidden;
  padding: 2px;
  color:black;
  font-size: 12px;
}

.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left {
    display: flex;
    align-items: center;
}

.right {
    font-size: 12px;
}

.avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    margin-right: 8px;
}

/* Styling for the user info (name) */
.user-info {
    font-weight: bold;
}

/* Styling for the message body */
.message-body {
    margin-top: 5px;
}


.footer {
  height: 10%;
  text-align: center;
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
                               
                              </div>
                              <div class="footer">
                                <a href="#" style="text-decoration: underline; color:black; font-size: 12px;">mark as read</a>
                              </div>
                            </div>
                      </li>

                      <li id="messenger">
                        <p>
                          <i class="fa fa-comments" aria-hidden="true"></i>
                            <span class="count"></span>
                          </p>
                          <div class="messenger-container">
                              <div class="top">
                                  <h2>Chat</h2>
                              </div>
                              <div class="main">  
                                <p class="text-center d-flex justify-content-center align-items-center loading-message" style="min-height: 180px;">Loading...</p>
                                <p class="text-center d-flex justify-content-center align-items-center no-messages-message" style="min-height: 180px;">No messages yet</p>
                              </div>
                              <div class="footer">
                                  <a href="#" style="text-decoration: underline; color:black; font-size: 12px;">all messages</a>
                              </div>
                          </div>
                      </li>
                      <li id="profile">
                        <p>
                            <img class="user-avatar" src="{{ asset('uploads/1.jpg') }}" alt="User Image">
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
         <!-- @include('vendor.Chatify.pages.app') -->
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

  setRightMargin();
    // Call the function whenever the window is resized (to handle responsive design)
  $(window).resize(function() {
    setRightMargin();
  });

  $('#messenger').on('click', function() {
  $('.profile-container').hide();
  $('.notification-container').hide();
  var messengerContainer = $('.messenger-container');

  // Check if the messenger container is hidden
  if (messengerContainer.is(':hidden')) {
    $('.no-messages-message').hide(); // Initially hide the "No messages yet" message
    $('.loading-message').show();
    $.ajax({
      url: '/get-message',
      method: 'GET',
      success: function(data) {
        
        $('.loading-message').hide();

        if (data.status === true && data.data.length > 0) {
          // Clear any existing content in the messenger container
          messengerContainer.find('.main').empty();

          data.data.forEach(function(message) {
            var receiverName = message.receiver.name.split(' ')[0];
            var body = message.body;
            var truncatedBody = body.length > 20 ? body.substring(0, 20) + '...' : body;
            var timestamp = calculateTimeAgo(message.created_at);
            var messageHTML = `
              <div class="container px-0 pb-1 px-2">
                <div class="row mx-0 bg-white rounded">
                  <div class="col-auto px-1">
                    <img src="{{ asset('uploads/1.jpg') }}" alt="User 1 Avatar" class="avatar">
                  </div>
                  <div class="col px-0 mx-1">
                    <div class="row mx-0">
                      <div class="col-5 px-0 text-start">${receiverName}</div>
                      <div class="col-7 px-0 text-end fw-lighter">
                        <small>${timestamp}</small>
                      </div>
                    </div>
                    <div class="row mx-0 text-start">
                      <p class="my-0 px-0 fw-lighter">${truncatedBody}</p>
                    </div>
                  </div>
                </div>
              </div>
            `;

            messengerContainer.find('.main').append(messageHTML);
          });

          // Show the messenger container after adding the messages
          messengerContainer.toggle();
        } else {
          console.log('No messages found');
          
          $('.loading-message').remove();
          $('.no-messages-message').show();
          messengerContainer.show();
          
        }
      },
      error: function(xhr, status, error) {
        console.error('Error fetching messages:', error);
        $('.loading-message').hide();
      }
    });
  } else {
    // If the messenger container is already open, just toggle it to hide it
    messengerContainer.toggle();
  }
});


    $('#notification').on('click', function() {
      $('.messenger-container').hide();
      $('.profile-container').hide();
      $('.notification-container').toggle();
    });

    $('#profile').on('click', function() {
      $('.messenger-container').hide();
      $('.notification-container').hide();
      $('.profile-container').toggle();
    });

    // Hide all containers when clicking outside
    $(document).on('click', function(event) {
      if (
        !$(event.target).closest('#messenger, #notification, #profile').length &&
        !$(event.target).closest('.messenger-container, .notification-container, .profile-container').length
      ) {
        $('.messenger-container, .notification-container, .profile-container').hide();
      }
    });
  });
  // Function to calculate the time ago
function calculateTimeAgo(createdAt) {
  var now = new Date();
  var createdDate = new Date(createdAt);

  var timeDiff = now - createdDate;
  var secondsDiff = Math.floor(timeDiff / 1000);

  if (secondsDiff < 60) {
    return secondsDiff + ' seconds ago';
  } else if (secondsDiff < 3600) {
    var minutesDiff = Math.floor(secondsDiff / 60);
    return minutesDiff + ' minutes ago';
  } else if (secondsDiff < 86400) {
    var hoursDiff = Math.floor(secondsDiff / 3600);
    return hoursDiff + ' hours ago';
  } else if (secondsDiff < 2592000) {
    var daysDiff = Math.floor(secondsDiff / 86400);
    return daysDiff + ' days ago';
  } else if (secondsDiff < 31536000) {
    var monthsDiff = Math.floor(secondsDiff / 2592000);
    return monthsDiff + ' months ago';
  } else {
    var yearsDiff = Math.floor(secondsDiff / 31536000);
    return yearsDiff + ' years ago';
  }
}
function setRightMargin() {
   // For Messenger container
   var messengerIconWidth = $('#messenger i').outerWidth(true);
    var messengerRightMargin = $(window).width() - ($('#messenger').offset().left + messengerIconWidth) - 50;
    $('.messenger-container').css('right', messengerRightMargin + 'px');

    // For Notification container
    var notificationIconWidth = $('#notification i').outerWidth(true);
    var notificationRightMargin = $(window).width() - ($('#notification').offset().left + notificationIconWidth) -100;
    $('.notification-container').css('right', notificationRightMargin + 'px');
  }
</script>



</body>

</html>
 