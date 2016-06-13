<?
/*
Главная страница

*/

?>

<div class=container>
<div class="row-fluid"><div class="span12"></div></div>


<!-- конт сетка -->            
<!-- subheader -->
       
            <div class="row-fluid subheader" style='border-bottom:0px'></div>

<!-- add new object-->
            <div class="row-fluid" >                                                  
              <div class="span3 " >
                <div style='position:relative;padding:15px'>
                  <h1 style='text-align:center'>Рейтинг Москвы</h1>
                  <div style='position:absolute;left:0px;top:35px'><img src=img/star_li.gif></div>
                  <div style='position:absolute;right:0px;top:35px'><img src=img/star_li.gif></div>
                </div>
              <div style='border-top:3px solid #aaa;padding:5px'></div>
              Узнайте, какие заведения по мнению экспертов занимают лидирующие позиции в рейтинге Москвы. Оставляйте отзвывы, становитесь экспертом, голосуйте, выбирайте лучших.                
              
              <div class=spacer></div>
              <div class=i-block>              
              <h5>Активность</h5>
                  <?=$site->showHistory('5');?>
              </div>
              
              </div>
              <div class="span9 ratings_thumbs">

                <div class="row-fluid">
<!-- food -->                  
                  <div class="span4 rating_thumb"  >
                    <a href='restaurants/'>                                             
                        <div class=categoryCounterIndex>
                            <img src="img/thumb_service.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> Рестораны </h5>
                            <span class=count><?=$site->countObjects("restaurants")?></span> 
                        </div>    
                    </a>                                        
                  </div>                                                  
                  <div class="span4 rating_thumb" >                    
                    <a href='bars/'>
                        <div class=categoryCounterIndex>
                            <img src="img/bar_thumb.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> Бары</h5>                                                                                
                            <span class=count><?=$site->countObjects("bars")?></span>
                        </div>    
                    </a>
                  </div>                  
                  <div class="span4 rating_thumb" >
                    <a href='spa/'>
                        <div class=categoryCounterIndex>
                            <img src="img/spa_thumb.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> SPA-cалоны</h5>
                            <span class=count><?=$site->countObjects("spa")?></span>
                        </div>
                      </a>
                  </div>
                </div> 
                <div class="row-fluid">
                  <div class="span4 rating_thumb" >
                    <a href='fitness/'>
                        <div class=categoryCounterIndex>    
                            <img src="img/fitness11_thumb.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> Фитнес-центры</h5>
                            <span class=count><?=$site->countObjects("fitness")?></span>
                        </div>    
                    </a>
                  </div>
                  <div class="span4 rating_thumb" >
                    <a href='vuz/'>
                        <div class=categoryCounterIndex>
                            <img src="img/vuz_thumb.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> ВУЗы</h5>
                            <span class=count><?=$site->countObjects("vuz")?></span>
                        </div>    
                    </a>
                  </div>
                  <div class="span4 rating_thumb" >
                    <a href='autosalon/'>
                        <div class=categoryCounterIndex>
                            <img src="img/autosalon_thumb.jpg" class="img-circle">
                            <h5><small>Рейтинг</small><br> Автосалоны</h5>
                            <span class=count><?=$site->countObjects("autosalon")?></span>
                        </div>    
                    </a>
                  </div>
                </div>
              </div>
            </div>

</div>

  <div class="bg_top_rep_index transit" style='min-height:130px;width:100%;z-index:-100'>  
    
    <div id=bg_r_transp class=transit style='background-image:url("/img/bg/lots_stars.png");background-repeat:no-repeat;min-height:130px;background-position:0px 200px'>
      <div class=container style="text-align:center;">
        <div style="margin-top:20px">
        <!--<h3 style="padding:20px;color:#fff">Дарите красивые мгновения!</h3><small><a href="/gift/" class="btn btn-large btn-warning">Купить подарочный сертификат</a></small>-->
        
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 728x90 rating.msk главная redplace -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-2316186557712140"
             data-ad-slot="9200877380"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        
       </div>       
      </div>
    </div>
        
  </div>

<div class=container>

<!-- ВЫВОД БЛОКОВ, только по $layer - список  -->
          
          <div class=spacer></div>
 
          
<!-- вывести последние 5 комментов-->                        
              
            <div class="i-block" style="border:0px">                  
                <h5>Отзывы</h5>
                <?=$site->showLatestReviews('6');?>                  
            </div>    
            


<!-- отзыв-->
            
            
            <div class="row-fluid ">
            <div class="span12"></div>
            </div>
                                    
            


<? require "footer.php"; ?>


</div> <!-- end of container-->
</body>
</html>
 
