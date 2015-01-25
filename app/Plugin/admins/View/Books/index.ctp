<h2 class="text-center">Quản lý sách</h2>
<div class="row">
  <h3 class="pull-left" style="margin:0">
    <a class="btn btn-primary" href="<?php echo fullBaseUrl ?>/admins/books/add/">Thêm mới</a>
  </h3>
  <div class="form-group col-md-3 pull-right">
    <input type="text" name="nameTxt"  class="form-control" id="searchName" placeholder="Search Book Here ...">
  </form>
</div>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('name','Tên Sách'); ?></th>
			<th>Tên Tác Giả</th>
			<th>Danh Mục</th>
			<th>Loại Bìa</th>
			<th>Giá</th>
			<th>Mô tả</th>
			<th>Ảnh</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody class="tblBook">
		
		<?php foreach ($books as $book) :?>
			<tr>
				<td style="max-width:200px"><?php echo $book['Book']['name']?></td>
				<td style="max-width:200px"><?php echo $book['Author']['name']?></td>
				<td><?php echo $book['Category']['name']?></td>
				<td><?php echo $book['Book']['covertype']?></td>
				<td><?php echo number_format($book['Book']['price'])?></td>
				<td><?php echo $book['Book']['description']?></td>
				<td><img src="<?php echo $this->webroot.'img/upload/books/'.$book['Book']['image']?>" alt="" width=100px height=50px;></td>
				<td>
					<a class="btn btn-xs btn-primary" href="<?php echo fullBaseUrl ?>/admins/books/edit/<?php echo $book['Book']['id']?>">Edit</a>
					<a class="btn btn-xs btn-danger" href="<?php echo fullBaseUrl ?>/admins/books/delete/<?php echo $book['Book']['id']?>">Delete</a>
				</td>
			</tr>
		<?php endforeach;?>
		
	</tbody>
</table>
<div class="pag"></div>
<?php
echo $this->Paginator->prev('« prev', null, null, array('class' => 'disabled'));
echo " | ".$this->Paginator->numbers()." | "; 
echo $this->Paginator->next('next »', null, null, array('class' => 'disabled')); 
echo " Page ".$this->Paginator->counter(); 
?>
<script>
 $(function () {
  $('#searchName').change(function(event) {
    /* Act on the event */
    var name = $(this).val();
    			//alert(name);
    			//console.log(name);
    			jQuery.ajax({
           url: '<?php echo fullBaseUrl.'/admins/books/searchAjax' ?>',
           type: 'POST',
           dataType: 'json',
           data: {name: name},
           complete: function(xhr, textStatus) {
    			    //called when complete
           },    			  
           success: function(data, textStatus, xhr) {                    
            $(".tblBook").html(data);
                    //$(".pag").html(data);
                    
                    //console.log(data[1]['Book'].name);
                    /*for (var i = 0; i < data.length; i++) {
                       console.log(data[i]['Book'].name); 
                    };
                    $(".hehe").html(data[1]['Book'].name);*/
                  },
                  error: function(xhr, textStatus, errorThrown) {
    			    //called when there is an error
           }
         });
          return false;
        });
});
</script>