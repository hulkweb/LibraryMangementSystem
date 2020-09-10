
setInterval(timer,1000);
function timer() {
    let time =Date(); 
    document.getElementById('timer').innerHTML=time; 
    
}
function add_book() {
	// body...
	
		document.getElementById('home_screen').style.display='none';
			document.getElementById('merge_books').style.display='none';
	document.getElementById('add_books').style.display='block';


}
function merge_book() {
	// body...
	document.getElementById('merge_students').style.display='none';
		document.getElementById('home_screen').style.display='none';
	document.getElementById('add_books').style.display='none';
		document.getElementById('merge_books').style.display='block';

}
function merge_students() {
	// body...
	
	document.getElementById('add_books').style.display='none';
		document.getElementById('home_screen').style.display='none';
		document.getElementById('merge_books').style.display='none';
		document.getElementById('merge_students').style.display='block';

}
function home_screen() {
	// body...
	
	document.getElementById('add_books').style.display='none';
		document.getElementById('home_screen').style.display='block';
		document.getElementById('merge_books').style.display='none';
		document.getElementById('merge_students').style.display='none';

}
function issue_book() {
	// body...
	
	
		document.getElementById('issue_book').style.display='block';
		
		document.getElementById('issued_book').style.display='none';

}
function issued_book() {
	// body...
	
	
		document.getElementById('issued_book').style.display='block';
	
		document.getElementById('issue_book').style.display='none';

}
