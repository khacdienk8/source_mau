
<style type="text/css">
div.chat_facebook
{
	position:fixed;
	right:-250px;
	top:calc(30% + 80px);
	width:250px;
	z-index:777777;
}
.tieude_chat
{
	position: absolute;height: 50px;left: -50px;top: 0px;cursor: pointer;
}

.img-chat-zalo {height: 52px;position: fixed;top: 30%; right: 0px;border-radius: 50%; z-index: 99999;}

</style>

<a target="_blank" href="https://zalo.me/<?=$company['zalo']?>">
	<img class="img-chat-zalo" src="images/icon-chat-zalo.png" alt="zalo" />
</a>


<div class="chat_facebook">
	<img class="tieude_chat" src="images/icon-messenger.png" alt="Messenger" />

    <div class="fb-page" data-href="<?=$company['fanpage']?>" data-tabs="messages" data-height="300px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?=$company['fanpage']?>" class="fb-xfbml-parse-ignore"><a href="<?=$company['fanpage']?>"><?=$company['fanpage']?></a></blockquote></div>
    
</div>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.tieude_chat').click(function(){
			if($('.chat_facebook').css('right')=='0px')
			{
				$('.chat_facebook').animate({right:-250},300);
			}
			else
			{
				$('.chat_facebook').animate({right:0},300);
			}
			
		});
    });
</script>

