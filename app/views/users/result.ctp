<?php echo($html->css(array('chrome','common','content','ie7','ie9','popup','stylesheet')));?>
<?php echo($javascript->link(array('common','validate','jquery/jquery.js','jquery/jquery-1.2.6.pack.js','jquery/jquery1.4.4.js')));?>
<div class="popup">
	
		<div class="popupTop">
			<div class="popupTopRight"></div>		
			<div class="popupTopLeft"></div>
			<div class="clr"></div>
		</div>
		
		
		<div class="popupMid">
			<div class="poupmidLeft">
				<div class="poupmidRight">
					<div class="midTop">
						<?php 
							$url = "$this->base/product/email_template/?shortURLIds=".$shortURLIds;
							echo $this->Form->create(null,array('id'=>'productForm','url'=>'/product/index'));
							echo $this->Form->input('',array('id'=>'txtHomeProduct','name'=>'txtHomeProduct','type'=>'hidden','value'=>$productId));
							echo $this->Html->link($this->Html->image("btn_close.png",array('class'=>'closeButton')),'javascript:redirectParent("'.$url.'")',array('escape' => false));  
							echo $this->Form->end();
						?>
						<?php if($res==1 || $res ==3){?>
							<P class="emailTxt">Thank you for using cheapstart</P>
						<?php } else {?>
							<P class="emailTxt">WARNING!</P>
						<?php } ?>
					</div>
					<div class="formDiv">
						<div class="formDivIn">
							<?php if($res==1||$res==3){?>
							<div style="margin: 30px 0pt 0pt 5px; padding-bottom: 10px; color: rgb(0, 0, 0);"> Your software List has been emailed to you.</div>
							<?php }else if($res==2||$res==4){?>
								<div style="margin: 30px 0pt 0pt 5px; padding-bottom: 10px; color: rgb(0, 0, 0);">
									There was an error  sending your email. Our engineers are looking in to it. <br/>Please try again later.
								</div>
							<?php }?>
						</div>
						
			
						
					</div>
				</div>
			</div>
		</div>
		
		
		
	
		<div class="popupBottom">
			<div class="popupBottomRight"></div>		
			<div class="popupBottomLeft"></div>
			<div class="clr"></div>
		</div>
		
		
		
	</div>	