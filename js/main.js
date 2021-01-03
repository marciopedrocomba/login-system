class AppController {

    constructor() {
        this.formEl = document.getElementById('post-form')
        this.postUpload()
    }

    postUpload() {
        this.formEl.save()
    }

}

new AppController()