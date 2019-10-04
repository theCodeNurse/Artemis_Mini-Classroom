const moduleToggler = document.querySelectorAll("#modules > li span")
const moduleContent = document.querySelectorAll("#modules > ul")
console.log(moduleToggler)
console.log(moduleContent)
Array.from(moduleToggler).forEach((item)=>{
	item.addEventListener('click', (e)=>{
		moduleContent.classList.toggle('.displayed')
		console.log(item.classList)
	});
})