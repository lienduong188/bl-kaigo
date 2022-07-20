//タブの切り替え
$(".tab-content").not(":eq(0)").hide();

$(".tap a").click(function (event) {
  event.preventDefault();

  $(this).closest(".tap").addClass("active");
  $(this).closest(".tap").siblings().removeClass("active");

  let targetTab = $(this).attr("href");
  $(".tab-content").not(targetTab).hide();
  $(targetTab).fadeIn();
});

// タブを開いたダイレクトリンク
$(document).ready(function() {
  switch(location.hash) {
    case "#homon":
      $('.tab1 a').click();
      break;
    case "#itaku":
      $('.tab2 a').click();
      break;
    case "#sodan":
      $('.tab3 a').click();
      break;
  }
});

//FAQ
jQuery(function ($) {
  $(".qa__sub").css("display", "none");
  $(".qa__ttl").click(function () {
    $(".qa__ttl").not(this).removeClass("open");
    $(".qa__ttl").not(this).next().slideUp(300);   
    $(this).toggleClass("open"); 
    $(this).next().slideToggle(300);
  });
});	
	
$(document).ready(function() {
  if (location.hash !== '') {
    // $('a[href="' + location.hash + '"]').tab('show');
    return $('a[data-toggle="tab"]').on('shown', function(e) {
      return location.hash = $(e.target).attr('href').substr(1);
    });
  }
});