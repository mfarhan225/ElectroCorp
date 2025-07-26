<?php  
 namespace App\Controllers; 

 class About extends BaseController 
 { 
 	 public function index() 
 	 { 
 		 $data = [ 
 			 'title'	  => 'Tentang Kami | ElectroCorp', 
 			 'heading'	  => 'Tentang ElectroCorp', 
 			 'tagline'	  => 'Inovasi Teknologi untuk Masa Depan Cerah', 
 			 'vision'	  => 'Menjadi pemimpin global dalam inovasi teknologi yang mengubah cara hidup dan bekerja melalui solusi elektronik canggih dan berkelanjutan.', 
 			 'mission'	  => [ 
 				 'Mengembangkan produk elektronik berkualitas tinggi dengan desain inovatif', 
 				 'Memberikan pengalaman pengguna yang luar biasa melalui layanan pelanggan kelas dunia', 
 				 'Berkontribusi pada kehidupan berkelanjutan dengan solusi ramah lingkungan' 
 			 ], 
 			 'values'	  => [ 
 				 [ 
 					 'icon' => 'lightbulb',  
 					 'title' => 'Inovasi',  
 					 'desc' => 'Terus mendorong batas teknologi untuk menciptakan solusi yang belum pernah ada sebelumnya.' 
 				 ], 
 				 [ 
 					 'icon' => 'award',  
 					 'title' => 'Kualitas',  
 					 'desc' => 'Kami mempertahankan standar tertinggi dalam setiap produk dan layanan yang kami berikan.' 
 				 ], 
 				 [ 
 					 'icon' => 'users',  
 					 'title' => 'Kolaborasi',  
 					 'desc' => 'Kami percaya kerja tim dan kemitraan yang kuat menghasilkan solusi terbaik.' 
 				 ] 
 			 ] 
 		 ]; 

 	   return view('templates/header', $data) 
 			   . view('about', $data) // Kita buat view 'product' selanjutnya 
 			   . view('templates/footer'); 
 	 } 
 }
