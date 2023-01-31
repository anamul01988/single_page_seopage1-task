<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <style media="screen">
    #preview{
        display: flex;
        width: 400px;
        height: 100px;
        border: 1px solid black;
        margin-top: -15px;
        flex-wrap: wrap;
        overflow: hidden;
        overflow-y: scroll;
        overflow-x: scroll;
    }
    #preview img{
      width: 40px;
      height: 40px;
    }
    </style>
  <body>
    <div class="mainContainer">
      <!-- modal start -->
      <div id="modal-overlay">
        <div id="modal">
          <div class="modal-header">
            <h2>Attachments Pop Up Window</h2>
          </div>

          <div class="modal-content">
            <p>Please upload multiple attachment : </p>
            <!-- <input
              type="file"
              multiple
              name="file"
              id="file"
              onchange="javascript:updateList()"
            /> -->
     
               <p>Selected files:</p>
               <div id="fileList">
      
            </div>
            <!--  -->
            <form enctype="multipart/form-data" action="" method="post">
                <input type="file" name="fileImg[]" id="fileImg" multiple onchange="preview();">
                <button type="button" onclick="submitData();">Submit</button>
            </form>
            <p> Preview</p>
            <div id="preview"> </div>
            
            <!--  -->
          </div>

          <div class="modal-footer">
            <button id="close-modal">Close</button>
            <!-- <button>Save</button> -->
          </div>
        </div>
      </div>
      <!-- modal end  -->
      <div class="mainArea">
        <div class="card cardArea">
          <div class="card-header">
            <div class="card-header-content">
              <div class="box card-box0"></div>
              <h3>Incomplete</h3>
            </div>

            <h4><button>0</button></h4>
          </div>

          <div class="veriousCard">
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card cardArea">
          <div class="card-header">
            <div class="card-header-content">
              <div class="box card-box1"></div>
              <h3>To Do</h3>
            </div>

            <h4><button>0</button></h4>
          </div>

          <div class="veriousCard">
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card cardArea">
          <div class="card-header">
            <div class="card-header-content">
              <div class="box card-box2"></div>
              <h3>Doing</h3>
            </div>

            <h4><button>0</button></h4>
          </div>

          <div class="veriousCard">
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card cardArea">
          <div class="card-header">
            <div class="card-header-content">
              <!-- <div class="box card-box2"></div> -->
              <h3>Under Review</h3>
            </div>

            <h4><button>0</button></h4>
          </div>

          <div class="veriousCard">
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card cardArea">
          <div class="card-header">
            <div class="card-header-content">
              <!-- <div class="box card-box2"></div> -->
              <h3>Completed</h3>
            </div>

            <h4><button>0</button></h4>
          </div>

          <div class="veriousCard">
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
            <div class="card cardContent1">
              <div class="cardContent-header1">
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/images.jpeg" alt="img1" />
                    <h3>client Name</h3>
                  </div>
                </div>
                <div class="card-header-item">
                  <div class="box1">
                    <img src="assets/img2.png" alt="img2" />
                    <h3>Sadik Istiak</h3>
                  </div>
                </div>

                <!-- <h4><button>0</button></h4> -->
              </div>
              <div class="cardContent-container">
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>Lorem ipsum dolor sit amet curn...</span>
                </p>
                <p>
                  <i class="fas fas fa-database container-left-icon"></i
                  ><span>1/2</span>
                </p>
              </div>
              <div class="cardContent-footer">
                <img src="assets/images.jpeg" alt="img1" />
                <img src="assets/img2.png" alt="img2" />
                <button>12+</button>
                <p><i class="fas fa-comments"></i><span>15</span></p>
                <p>
                  <button id="open-modal">
                    <i class="fas fa-paperclip"></i></button
                  ><span id="fileCounter">25</span>
                </p>
                <p><i class="fas fa-calendar"></i><span>25-12-2022</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      updateList = function () {
        var input = document.getElementById("file");
        var output = document.getElementById("fileList");
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
          children += "<li>" + input.files.item(i).name + "</li>";
        }
        output.innerHTML = "<ul>" + children + "</ul>";
      };
    


      $(document).ready(function(){
      $.ajax({    
        type: "GET",
        url: "getdata.php",             
                    
        success: function(data){                     
           $("#fileCounter").text(data);
          }
        });
      });

    </script>
    <script type="text/javascript"> 
     function preview(){
      var input = document.getElementById("fileImg");
        var output = document.getElementById("fileList");
        var children = "";
        var totalFiles = $('#fileImg').get(0).files.length;
        for(var i = 0; i < totalFiles; ++i){
          $('#preview').append("<img src = '"+URL.createObjectURL(event.target.files[i])+"'>");
          children += "<li>" + input.files.item(i).name + "</li>";
        }
        output.innerHTML = "<ul>" + children + "</ul>";
      }

      function submitData(){
        $(document).ready(function(){
          var formData = new FormData();
          var totalFiles = $("#fileImg").get(0).files.length;
          for (var i = 0; i < totalFiles; i++) {
              formData.append("fileImg[]", $("#fileImg").get(0).files[i]);
          }

          $.ajax({
            url: 'postData.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success:function(response){
              alert(response);
              location.reload();
            }
          });
        });
      }
     </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script>
      // Show Modal
      const openModalButton = document.getElementById("open-modal");
      const modalWindowOverlay = document.getElementById("modal-overlay");

      const showModalWindow = () => {
        modalWindowOverlay.style.display = "flex";
      };
      openModalButton.addEventListener("click", showModalWindow);

      // Hide Modal
      const closeModalButton = document.getElementById("close-modal");

      const hideModalWindow = () => {
        modalWindowOverlay.style.display = "none";
      };

      closeModalButton.addEventListener("click", hideModalWindow);

      // Hide On Blur

      const hideModalWindowOnBlur = (e) => {
        if (e.target === e.currentTarget) {
          console.log(e.target === e.currentTarget);
          hideModalWindow();
        }
      };

      modalWindowOverlay.addEventListener("click", hideModalWindowOnBlur);
    </script>
    <script>
      updateList = function () {
        var input = document.getElementById("file");
        var output = document.getElementById("fileList");
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
          children += "<li>" + input.files.item(i).name + "</li>";
        }
        output.innerHTML = "<ul>" + children + "</ul>";
      };
    


      $(document).ready(function(){
      $.ajax({    
        type: "GET",
        url: "getdata.php",             
                    
        success: function(data){                     
           $("#fileCounter").text(data);
          }
        });
      });

    </script>
  
  </body>
</html>

