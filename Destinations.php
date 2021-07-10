<?php
include 'config.php';
include 'includes/header.php';
 ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="css/Destinations.css">
</div>
 <section class="country">
         <div class="destinations_top_header">
           <div class="destinations_top_header__title">COUNTRY</div>
           <div class="destinations_top_header__subtitle">Find Your Destination</div>
         </div>
         <div class="row">
           <div class="country-col">
             <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/9f/36/1b/big-ben.jpg">
             <div class="layer">
               <h3>LONDON</h3>
             </div>
           </div>
           <div class="country-col">
             <img src="https://i.vietgiaitri.com/2014/12/8/thu-vi-hinh-anh-nui-phu-si-doi-non-87e66f.jpg">
             <div class="layer">
               <h3>JAPAN</h3>
             </div>
           </div>
           <div class="country-col">
             <img src="https://phuonghoangtours.com/sites/default/files/styles/tour_detail/public/du-lich-dubai-ha-noi-dubai-abudhabi-sa-mac-safari-6-ngay-bay-emirate-airlines.jpg?itok=AbRL9Pe7">
             <div class="layer">
               <h3>DUBAI</h3>
             </div>
           </div>
           <div class="country-col">
             <img src="https://greenmore.vn/wp-content/uploads/2018/10/thap-doi-Bosco-Verticale-o-Italy-greenmore-8.jpg">
             <div class="layer">
               <h3>ITALY</h3>
             </div>
           </div>
         </div>
         </section>
<script src="scripts.js"></script>
<section class="features">
 <div class="mt-3" data-spy="scroll" data-target="navbarDropdownMenuLink" data-offset="0">
   <div id="London">
 <section class="dest_top__section">
   <header class="dest_top__section_header">
     <h1 class="dest_top__section_title" id="#London">Top Destinations in London</h1>
     <h2 class="dest_top__section_subtitle">By London Guide Recommendation</h2>
   </header>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-1.jpg?tr=dpr-1.5,w-675">
             <div class="number">
               <p>1</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Greenwich
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>This is a district in the south of London, one of London's richest places, just 8 minutes from downtown London by Southeastern bullet train.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
</div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-6.jpg?tr=dpr-1.5,w-675">
             <div class="number">
               <p>2</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Warner Bros. Studio Tour London
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>If Singapore is famous for Universal Studios, London is a desirable destination for Potterheads - fans of the famous Harry Potter series.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
</div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-10.jpg?tr=dpr-1.5,w-675">
             <div class="number">
               <p>3</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Tower of London
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>The Queen's Palace and Fortress, also commonly known as the Tower of London, is a historic site located in the heart of the city, on the north bank of the River Thames.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-16.jpg?tr=dpr-1.5,w-675">
           <div class="number">
             <p>4</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Madame Tussaud's Wax Museum
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Madame Tussauds is one of the famous tourist destinations in the UK, where more than 300 wax statues of famous people are displayed.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-20.jpg?tr=dpr-1.5,w-675">
           <div class="number">
             <p>5</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Buckingham Palace
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Buckingham Palace is Britain's most famous residence, Queen Elizabeth II's luxurious residence and workplace.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://ik.imagekit.io/tvlk/blog/2019/02/nhung-dia-diem-du-lich-noi-tieng-o-anh-21.jpg?tr=dpr-1.5,w-675">
           <div class="number">
             <p>6</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Museums and art galleries
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Like France and most other European countries, the UK has many great museums and art galleries.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
   </div>
 </section>
</section>
<section class="features">
 <div class="mt-3" data-spy="scroll" data-target="navbarDropdownMenuLink" data-offset="0">
   <div id="Japan">
 <section class="dest_top__section">
   <header class="dest_top__section_header">
     <h1 class="dest_top__section_title" id="#Japan">Top Destinations in Japan</h1>
     <h2 class="dest_top__section_subtitle">By Japan Guide Recommendation</h2>
   </header>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://d20aeo683mqd6t.cloudfront.net/articles/title_images/000/038/800/original/pixta_36552332_M_t.jpg?2019&d=750x400">
             <div class="number">
               <p>1</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Tokyo
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Japan's capital and largest city.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://duhocvietnhat.edu.vn/wp-content/uploads/Slide3.jpg">
             <div class="number">
               <p>2</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Kyoto
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>For over 1000 years the capital of Japan.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="http://d20aeo683mqd6t.cloudfront.net/vi/articles/title_images/000/039/020/medium/osaka_glico.jpg?2020">
             <div class="number">
               <p>3</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Osaka
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Largest city of the Kinki Region.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://univietravel.com/uploads/diem-den/nuocngoai/nhatban/nara/nara-thanh-pho-cua-nhung-di-san-van-hoa-nhat-ban-1.jpg">
           <div class="number">
             <p>4</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Nara
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Japan's first permanent capital.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://i.pinimg.com/originals/64/9f/38/649f385212df73007a9714d2f6e586fe.png">
           <div class="number">
             <p>5</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Mount Fuji
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>The country's most iconic landmark.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://xuatkhaulaodong.com.vn/images/2017/03/24/lau-dai-Hiroshima-nhat-ban.jpg">
           <div class="number">
             <p>6</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Hiroshima
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Regional capital with a tragic history.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
   </div>
 </section>
</section>
<section class="features">
 <div class="mt-3" data-spy="scroll" data-target="navbarDropdownMenuLink" data-offset="0">
   <div id="Dubai">
 <section class="dest_top__section">
   <header class="dest_top__section_header">
     <h1 class="dest_top__section_title" id="#Dubai">Top Destinations in Dubai</h1>
     <h2 class="dest_top__section_subtitle">By Dubai Guide Recommendation</h2>
   </header>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t0.gstatic.com/images?q=tbn:ANd9GcSLh5oY9lntpWezfkH6SA30aQBl5L5dU9oki361vwO2teZvSTuyJbbcfhL9g_ZBMU1Xj-boM_k_Kq26D_fIYjSQZg">
             <div class="number">
               <p>1</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Burj Khalifa
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Is a skyscraper in the "New Center" area of ​​Dubai city. This is the tallest man-made building in the world ever built.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t0.gstatic.com/images?q=tbn:ANd9GcSSk-A3mwr4r-K2Tb1PdQ9YH8aXtBdAMwUB8lwBl4eGbSl0DieN5bc_ZWikNwXrijQoJI5JtyepBARV-e1SIZdrqg">
             <div class="number">
               <p>2</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Burj al-Arab
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Burj Al Arab is a luxury hotel in Dubai and is called "the world's first 7-star hotel".</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t3.gstatic.com/images?q=tbn:ANd9GcRvbS_8jIC0KnSR9_R2Okq1ECOraFu4X92B8X_bmeoq-hPI9th21OWLEB3idY482PBL0agmCsarDYECL4K5l3VZww">
             <div class="number">
               <p>3</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Dubai mall
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Dubai Mall is a shopping mall in Dubai and is the largest mall in the world by area.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t3.gstatic.com/images?q=tbn:ANd9GcTTPIRrSE8Wu24cL-hoEXqTqWSQdTn4NUxWwUJZyQsDCop7LlHLoEGmJRUR9Ikgg5QEwPckp4nHUlkiJgZZ6zqSDg">
           <div class="number">
             <p>4</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Dubai Creek
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Estuary, golf, marina and river.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t2.gstatic.com/images?q=tbn:ANd9GcRXdlb0ia7PJjb61p6xeY5gBRWeszeuuk68HNurmbVMSGK433O_Ptsu0pGBFRsvO9WvpchCq5bipA-hiOCdsWiEyg">
           <div class="number">
             <p>5</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>The Dubai fountain
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Dubai Fountain is the largest system of fountains in the world located on the artificial lake Burj Khalifa.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t3.gstatic.com/images?q=tbn:ANd9GcQikkCpIFKx8PVw1-aKAfv0bBdVE3Juzee8fbWpdm8hkYAKaD844URDy0zARZGLuRJKkmAIdxJMhredHaFfbVtpHg">
           <div class="number">
             <p>6</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Ski Dubai
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Ski Dubai is a covered winter ski amusement park.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
   </div>
 </section>
</section>
<section class="features">
 <div class="mt-3" data-spy="scroll" data-target="navbarDropdownMenuLink" data-offset="0">
   <div id="Italy">
 <section class="dest_top__section">
   <header class="dest_top__section_header">
     <h1 class="dest_top__section_title" id="#Italy">Top Destinations in Italy</h1>
     <h2 class="dest_top__section_subtitle">By Italy Guide Recommendation</h2>
   </header>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t2.gstatic.com/images?q=tbn:ANd9GcSqsodn85JD0w-M7U-BpFSwvCcj_XGXejYVMoWU8KyL6KPogCN5Mw_NRY9v3kYN5L3-r1DCz_VdR1YysZta5nO5OQ">
             <div class="number">
               <p>1</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>The Colosseum
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>The Colosseum was first known as the Amphitheatrum Flavium.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t2.gstatic.com/images?q=tbn:ANd9GcTwo9fKfl5kFmYz9m_nakxGcMeRctVd3lwdTylZ4L7yt4YHuojvWODPsmbQRg0tOWFydtH0GtDtIyrwNd0SRYX_Mg">
             <div class="number">
               <p>2</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Cinque Terre
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Cinque Terre is a rugged coastal area about 12 km long, favored by the climate on the Riviera coast, in the Liguria region, northwest Italy.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
       <div class="col-md-4">
         <div class="feature-box">
           <div class="feature-img">
             <img src="https://t0.gstatic.com/images?q=tbn:ANd9GcQ0peQQzKso1Ry1kqlKTk4gnmzfZx8AeEkitDTpzRE_SalL1TEItNq5AlP7mmkEx1D0_xur-9Wekmtil_1LOrpJdA">
             <div class="number">
               <p>3</p>
           </div>
         </div>
         <div class="feature-details">
           <h4>Firenze Cathedral
             <div class="rating">
               <i class="fa fa-circle"></i>
               <i class="fa fa-circle"></i>
             </div>
           </h4>
           <p>Cattedrale di Santa Maria del Fiore is the main church of Firenze, Italy.</p>
         </div>
             <div class="post-info">
         <!-- if user likes post, style button differently -->
           <i  if (userLiked($post['id'])):
               class="fa fa-thumbs-up like-btn"
              else:
               class="fa fa-thumbs-o-up like-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="likes"></span>

           &nbsp;&nbsp;&nbsp;&nbsp;

         <!-- if user dislikes post, style button differently -->
           <i
              if (userDisliked($post['id'])):
               class="fa fa-thumbs-down dislike-btn"
              else:
               class="fa fa-thumbs-o-down dislike-btn"
              endif
             data-id=" echo $post['id'] "></i>
           <span class="dislikes"></span>
    </div>
  </div>
  </div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t2.gstatic.com/images?q=tbn:ANd9GcRW0_pH9TNfQs_RiQdpyBHx7Qh0nQmoNCJ9BNCrt3fU903W4Hc4RztlM56ISS5ffUfAkv3NB9JRWA9zUVi8fzD_KA">
           <div class="number">
             <p>4</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Pantheon Temple
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Pantheon Temple is an architectural work in Rome, Italy.</p>
       </div>
     </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t1.gstatic.com/images?q=tbn:ANd9GcQ19ksmbYhINtMP2AxgdBDkgZRPon2Tz_ZGNEDABdsyIh3WwtGGmCN2W-qcnc_icKMcFLHcNwz-AbInw5Xbl7BNhA">
           <div class="number">
             <p>5</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Leaning Tower of Pisa
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>The Leaning Tower of Pisa is a bell tower in the city of Pisa that was built in 1173.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
     <div class="col-md-4">
       <div class="feature-box">
         <div class="feature-img">
           <img src="https://t3.gstatic.com/images?q=tbn:ANd9GcT9ZTrTl6qn3yqEHF85TTVgE2LA8ShpxxMTd2Rv3WfM1Ye_fefiJcIBmkWiHgDpTIO7zdGHop1w4SA--HFz5S0s7A">
           <div class="number">
             <p>6</p>
         </div>
       </div>
       <div class="feature-details">
         <h4>Square San Marco
           <div class="rating">
             <i class="fa fa-circle"></i>
             <i class="fa fa-circle"></i>
           </div>
         </h4>
         <p>Square San Marco or St. Mark's Square is the most important and most famous square of Venice city.</p>
       </div>
           <div class="post-info">
       <!-- if user likes post, style button differently -->
         <i  if (userLiked($post['id'])):
             class="fa fa-thumbs-up like-btn"
            else:
             class="fa fa-thumbs-o-up like-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="likes"></span>

         &nbsp;&nbsp;&nbsp;&nbsp;

       <!-- if user dislikes post, style button differently -->
         <i
            if (userDisliked($post['id'])):
             class="fa fa-thumbs-down dislike-btn"
            else:
             class="fa fa-thumbs-o-down dislike-btn"
            endif
           data-id=" echo $post['id'] "></i>
         <span class="dislikes"></span>
  </div>
</div>
</div>
   </div>
 </section>
</section>

 <?php
 include 'includes/footer.php';
  ?>
