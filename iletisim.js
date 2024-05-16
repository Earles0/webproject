new Vue({
    el: '#app',
    data: {
        form: {
            name: '',
            email: '',
            message: ''
        },
        errors: {
            name: '',
            email: '',
            message: ''
        }
    },
    methods: {
        validateForm() {
            this.clearErrors();

            if (!this.form.name) {
                this.errors.name = 'Adınızı giriniz.';
            }

            if (!this.form.email) {
                this.errors.email = 'Email adresinizi giriniz.';
            } else if (!this.validEmail(this.form.email)) {
                this.errors.email = 'Geçerli bir email adresi giriniz.';
            }

            if (!this.form.message) {
                this.errors.message = 'Mesajınızı giriniz.';
            }

            if (!this.errors.name && !this.errors.email && !this.errors.message) {
                alert('Form başarıyla gönderildi!');
                // Form verilerini başka bir sayfada görüntüleme işlemi burada yapılabilir
            }
        },
        resetForm() {
            this.form.name = '';
            this.form.email = '';
            this.form.message = '';
            this.clearErrors();
        },
        clearErrors() {
            this.errors.name = '';
            this.errors.email = '';
            this.errors.message = '';
        },
        validEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\.,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,})$/i;
            return re.test(email);
        }
    }
});
