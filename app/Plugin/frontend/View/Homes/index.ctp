<?php echo $this->element('slider');?>
<?php 
echo $this->element('slider_book',array(
	'distribute'=>'Sách Mới',
	'books'=>$newBooks)
);
?>
<?php 
echo $this->element('slider_book',array(
	'distribute'=>'Sách Được Bình Chọn Nhiều Nhất',
	'books'=>$voteBooks)
);
?>
<?php 
echo $this->element('slider_book',array(
	'distribute'=>'Sách Sắp Phát Hành',
	'books'=>$comingBooks)
);
?>
<?php 
echo $this->element('slider_book',array(
	'distribute'=>'Sách Nên Đọc',
	'books'=>$readBooks)
);
?>
<div id="author_area" class="author-box feature-box clearfix">
	<div class="feature-head-home clearfix">
		<h2 class="feature-title"><a href="author/lam-minh-chanh.html">Tác Giả Tiêu Biểu : Lâm Minh Chánh</a></h2>
	</div>
	<div class="author_avatar"><a href="author/lam-minh-chanh.html">
		<img src="http://tikicdn.com/media/author/l/Lâm-Minh-Chánh.jpg" alt="Lâm Minh Chánh"></a>
	</div>
	<div class="author_books">
		<div class="author_info">
			<p>Doanh nhân &ndash; Tác giả Lâm Minh Chánh có 24 năm trải nghiệm: 18 năm làm quản lý cấp cao cho các tập đoàn Kodad, AIA, Prudential, Chứng khoán DVSC, và 6 năm làm doanh nhân, nhà đầu tư. Ông là người đồng sáng lập sàn giao dịch Vàng Thế Giới, chuỗi Trung tâm Toán tư duy Hoa Kỳ Mathnasium, Công ty Kiến trúc và xây dựng Nhà Vui. Hiện ông đang đầu tư lãnh vực giáo dục, thương mại điện tử.
			</p>
			<p>Ông là một giảng viên về quản trị, tài chính và là cộng tác viên cho các báo kinh tế. Cuốn sách “Tăng tốc đến thành công - Tập 1” là tác phẩm đầu tay của bộ sách 4 cuốn, mỗi cuốn tóm tắt 25 cuốn sách kinh doanh hàng đầu của thế giới.<br><br>
			</p>                
		</div>


		<ul>
		</ul>
	</div>
</div>

<?php echo $this->element('category');?>