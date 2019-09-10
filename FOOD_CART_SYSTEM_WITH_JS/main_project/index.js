
const Itemlist  = document.getElementById('item-list');
//create a event listener
eventListener()

function eventListener(){
	document.querySelector('#form').addEventListener('submit',newItem);
}


function newItem(e){
	e.preventDefault();
	const item = document.getElementById('item').value;
	//console.log(item);
	const li = document.createElement('li');
	li.textContent = item;
	Itemlist.appendChild(li);

	

}