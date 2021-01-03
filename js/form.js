HTMLFormElement.prototype.save = function() {
    this.addEventListener('submit', (e) => {
        e.preventDefault();
        alert();
        console.log(this)
    })
}