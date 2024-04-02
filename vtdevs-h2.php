<style>
/* Hiện bài viết liên quan theo danh mục */
#related_posts .col {
	float: left;
	margin-left: 0;
	list-style: none;
}

.hotline-phone-ring-wrap {
	bottom: 50px !important;
}

.relatedcontent h3 {
	font-size: 16px;
	margin-top: 7px;
}

.relatedthumb img {
	height: 100%;
	max-height: 165px;
}

#related_posts {
	border-top: 4px double #e8e8e8;
	padding-top: 10px;
}

#related_posts li:nth-child(1) {
	padding-left: 0 !important;
}

#related_posts li:nth-child(2) {
	padding-left: 0 !important;
	padding-right: 0 !important;
}

#related_posts li:nth-child(3) {
	padding-right: 0 !important;
}

.relatedthumb img {
	min-height: 125px;
}
/* css phần bảng giá cửa nhôm
 */
.tablepress {
	border-collapse: collapse;
	border-spacing: 0;
	width: 100%;
	margin-bottom: 1em;
	border: 1px solid #000 !important;
}

.tablepress tbody td, .tablepress tfoot th {
	border-top: 1px solid #000;
}

.tablepress tbody td, .tablepress tfoot th {
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
}

.tablepress .odd td {
	background-color: #fff;
	padding: 5px;
	color: #000;
}

.tablepress .even td {
	background-color: #fff;
	padding: 5px;
	color: #000;
}

td.column-2 {
	width: 447px;
}

.tablepress tfoot th, .tablepress thead th {
	background-color: #DA9695;
	font-weight: 700;
	vertical-align: middle;
}

.tablepress tbody tr:first-child td {
	border-top: 0;
	background-color: #001F61;
}

.box-contact-bottom {
	display: none;
}

@media only screen and (max-width:767px) {
	.box-contact-bottom {
		display: block;
	}
}

.box-contact-bottom {
	position: fixed;
	bottom: 8px;
	right: 8px;
	left: 8px;
	z-index: 999;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	overflow: hidden;
}

.box-contact-bottom .item {
	cursor: pointer;
	width: 50%;
	float: left;
	height: 54px;
	box-sizing: border-box;
}

.box-contact-bottom :first-child.item {
	border-right: 1px solid #ffffff;
}

.box-contact-bottom :last-child.item {
	border-left: 1px solid #ffffff;
}

.box-contact-bottom .item.s-form-contact {
	background: #24b056;
}

.bottom-mobile-number {
	height: 54px;
	color: #fff;
	overflow: hidden;
	background: #eb5155;
}

.bottom-mobile-number .thumb-image {
	margin-top: 10px;
	width: 47px;
	float: left;
	height: 32px;
	background: url(https://phuongtrangwindow.com/wp-content/uploads/2020/03/phone-call-red.gif) no-repeat center;
	position: relative;
	overflow: hidden;
}

.bottom-mobile-number .mobile {
	text-align: center;
}

.bottom-mobile-number .mobile p {
	line-height: 19px;
	margin-top: 10px;
	color: #fff !important;
	display: block;
	cursor: pointer !important;
}

.s-form-contact .button-s-contact {
	padding: 18px 0;
}

.s-form-contact .button-s-contact .icon-message {
	width: 42px;
	height: 36px;
	float: left;
	background: url(https://phuongtrangwindow.com/wp-content/uploads/2020/03/chat-fill-red.svg) no-repeat center;
	background-size: contain;
	margin-top: -6px;
	margin-right: 4px;
	margin-left: 4px;
}

.s-form-contact .button-s-contact span {
	color: #fff;
	font-size: 17px;
}

.item.s-mobile-number.phone-click a, .box-contact-bottom .item.s-form-contact a {
	text-decoration: none;
}

strong {
	font-weight: bold;
}

#comments {
	display: none;
}
/* TOC */
div#toc_container,#ez-toc-container {
	margin-bottom: 20px;
	border: 1px solid #404040;
	box-shadow: -5px 5px 0px 0px #d0d0d0;
	padding: 10px !important;
} 
/* li.ez-toc-page-1.ez-toc-heading-level-1, ul.ez-toc-list-level-2,ul.ez-toc-list-level-3,ul.toc_list li { margin-left: 0; }
 */  
ul.ez-toc-list-level-2 {
}

ul.ez-toc-list-level-3 {
}

ul.ez-toc-list-level-2, ul.ez-toc-list-level-3 {
	margin: 10px 0;
}

#ez-toc-container nav ul li a {
	padding: 16px 0;
}

ul.toc_list {
	overflow: auto;
	max-height: 300px;
}

ul.toc_list ul {
	margin: 10px 0;
}

#toc_container ul li ul li {
	margin-left: 30px;
}

#toc_container ul li {
	font-size: 100%;
	list-style-type: none;
	margin-left: 0;
}

#toc_container ul li a {
	color: #1d1d1d;
}

p.toc_title {
	border-bottom: 1px solid #505050;
}
/* Rate */
.dashicons, .dashicons-before:before {
	font-family: dashicons;
	display: inline-block;
	line-height: 1;
	font-weight: 400;
	font-style: normal;
	speak: none;
	text-decoration: inherit;
	text-transform: none;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	width: 20px;
	height: 20px;
	font-size: 20px;
	vertical-align: top;
	text-align: center;
	transition: color .1s ease-in;
}

.dashicons-star-filled:before {
	content: "*";
	font-size: 35px;
}

.dashicons-star-empty:before {
	content: "x";
}

.dashicons-star-half:before {
	content: "x";
}

.entry-content {
	margin-bottom: -60px;
}

@media (min-width: 850px) {
	.entry-content {
		margin-bottom: -90px;
	}
}
</style>