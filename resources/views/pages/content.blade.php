@extends('layouts.default')
@section('content')
<div class="top">
	<img src="{{ Config::get('app.url_assets') }}assets/img/banner/banner.png" alt="" class="w-100">
</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-12 col-md-8">
			<div class="row">
				<div class="col-md-12 mb-3">
					<h2>จอดรถพื้นลาดเอียงเป็นเวลานานส่งผลเสีย ต่อรถของคุณหรือไม่</h2>
					<p class="mb-5"><i class="fa fa-clock-o" aria-hidden="true"></i> เมื่อวาน 15:26 น.</p>
					<p>
						ด้วยพื้นที่จอดรถของคนใช้รถเเต่ละคนไม่เหมือนกัน บางคนมีพื้นที่กว้าง บางคนแคบ หรือบางคน
						ก็ต้องจอดรถบนพื้นที่ไม่เสมอกันหรือพื้นที่เอียงลาดไปด้านใดด้าน หนึ่งด้วยความจำเป็นเนื่อง
						จากมีพื้นที่จำกัดไม่สามารถเลี่ยงได้ จึงต้องจอดรถแบบเอียงๆ ทุกวัน คำถามคือ เเล้วถ้าเรา จอดรถบนพื้นเอียง แบบนี้ทุกวันจะส่งผลเสียใดๆ กับรถ ยาง ระบบกันกระแทกของรถหรือไม่
					</p>
				</div>
				<div class="col-md-12">
					<img src="{{ Config::get('app.url_assets') }}assets/img/content/content01.png" alt="" class="w-100 mb-5">
					<p class="mb-5">
						การ จอดรถบนพื้นเอียง ไปด้านใดด้านหนึ่งไม่ว่าทางซ้ายหรือขวาแน่นอนว่าน้ำหนักของตัวรถ
						จะต้องเทไปด้านที่ลาดเอียงมากกว่าปกติอยู่เเล้วหากจอดติดต่อกันเป็นเวลานานย่อมเกิดการสึกหรอต่อ ยาง โช๊ค สปริง ลูกหมาก ได้ง่าย หากจอดทุกๆระบบช่วงล่างของรถย่อมต้องมีปัญหา
						มากกว่ารถที่จอดบนพื้นเรียบปกติ ระดัับความเอียงทีจะส่งผลกระทบต่อรถมากที่สุดคือตั้งแต่
						15 องศาขึ้นไปจนถึง 45 องศา เมื่อน้ำหนักของตัวรถเทไปในตำแหน่งที่ไม่เท่ากัน ระบบช่วงล่าง เช่น ยางก็ต้องรับน้ำหนักฝั่งที่เอียงมากกว่าปกติ หากจอดเป็นระยะเวลานาน หรือจอดเป็นประจำ ยางข้างที่รับน้ำหนักบ่อยๆ จะมีปัญหาบวมได้ง่ายกว่าข้างที่ไม่ต้องรับน้ำหนัก และรถเสื่อมเสีย
						สมดุลย์ ไม่เท่ากัน หรือเรียกภาษาชาวบ้านว่า กินยาง
					</p>
					<img src="{{ Config::get('app.url_assets') }}assets/img/content/content02.png" alt="" class="w-100 mb-5">
					<p class="mb-3">
						นอกจากเรื่องยางเเล้วการ จอดรถบนพื้นเอียงเป็นเวลานานจะทำให้รถสูญเสียสมดุลโครงสร้างของรถจะ
						เปลี่ยนไป โดยเฉพาะรถยนต์ที่โครงสร้่างไม่มีคลัชซีจะยิ่งส่งผลต่อตัวรถมีโอกาสที่โครงสร้างรถเสียหาย บิดตัว รถเสียการทรงตัว รถเอียงตามมา
					</p>
					<p>
						ดังนั้น การจอดรถบนพื้นเอียงด้านใดด้านหนึ่งไม่ว่าจะซ้ายหรือขวาย่อมส่งผลเสียต่อรถแต่หากเป็นการจอด
						แบบชั่วคราวยังไม่ต้องวิตกเรื่องนี้มากนักเพียงแค่อย่าลืมใส่เกียร์ P ยกเบรกมือขึ้น หรือหากเป็นการจอดบน
						พื้นลาดเอียงหน้าลอย หรือหน้ารถกดลงพื้นควรหาก้อนหินมาหนุุนที่ล้อด้วยเพื่อป้องกันการเคลื่อนตัวของ
						รถในเหตุสุดวิสัย
					</p>
				</div>

			</div>
		</div>
		<div class="col-md-4 d-none d-sm-block">
			<div class="row mb-4">
				<div class="col-md-12">
					<div class="blog-content">
						<h5>บทความอื่นๆ</h5>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-6"><img src="{{ Config::get('app.url_assets') }}assets/img/content/ct01.png" alt="" class="w-100"></div>
				<div class="col-md-6">
					<h6>10 สิ่งเกี่ยวกับรถที่ควรเช็คให้เป็นนิสัย </h6>
					<p>
						Krungsri Auto เชื่อว่าไม่ว่าใครก็
						คงอยากให้รถสุดที่รักอยู่กับเรา
					</p>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-6"><img src="{{ Config::get('app.url_assets') }}assets/img/content/ct02.png" alt="" class="w-100"></div>
				<div class="col-md-6">
					<h6>ควันดำ เรื่องเล็กๆ แค่หมั่นเช็ครถ กับ 5 วิธีปฏิบัติ </h6>
					<p>
						ควันดำก็คือผงเขม่าสีดำขนาด
						เล็กที่เหลือจากการ...
					</p>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-6"><img src="{{ Config::get('app.url_assets') }}assets/img/content/ct03.png" alt="" class="w-100"></div>
				<div class="col-md-6">
					<h6>ล้อแม็กที่เราเลือกเป็นของแท้หรือของปลอมเขามีวิธีการสังเกตแบบนี้เองเหรอ </h6>
					<p>
						ใครที่กำลังมองหาซื้อล้อแม็กต้องอย่าพลาด วันนี้...
					</p>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-6"><img src="{{ Config::get('app.url_assets') }}assets/img/content/ct04.png" alt="" class="w-100"></div>
				<div class="col-md-6">
					<h6>จะเป็นยังไง? ถ้าเราดึงเบรคมือไฟฟ้าในระดับความเร็วที่ 190 กม./ชม. </h6>
					<p>
						รถยนต์รุ่นใหม่ๆในปัจจุบันนี้...
					</p>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-6"><img src="{{ Config::get('app.url_assets') }}assets/img/content/ct05.png" alt="" class="w-100"></div>
				<div class="col-md-6">
					<h6>ผ่อนรถต่อไม่ไหวแล้ว ทำยังไงดี  </h6>
					<p>
						สำหรับมนุษย์เงินเดือนทั้งหลายคงจะต้องเคยเจอ... 
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-right">
					<a href="" class="btn btn-warning btn-theme">ดูบทความทั้งหมด</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop