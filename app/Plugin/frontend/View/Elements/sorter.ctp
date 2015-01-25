<div class="b-pager_top">    
	<ul class="b-pager clearfix">
		<li class="b-pager_view">
			<div class="btn-group btn-group-sm">
				<button class="btn btn-default acitve" type="button" title="Lưới">
					<i class="fa fa-th-large"></i>
				</button>
				<button class="btn btn-default" type="button" title="Danh sách">
					<i class="fa fa-th-list"></i>
				</button>
			</div>
		</li>

		<li class="b-pager__sort">
			<span class="b-pager__sort-text"> Xếp theo : </span> 
			<?php 
			echo $this->Paginator->sort('name','Tên Sách');
			echo '&nbsp;'.' | '.'&nbsp;';
			echo $this->Paginator->sort('price','Giá Tiền');
			echo '&nbsp;&nbsp;&nbsp;&nbsp;'; 
			?>                            
		</li>
	</ul>
</div>