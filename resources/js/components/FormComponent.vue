<template>
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-white">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form" style="padding: 0 0;">
                        <img :src="base_url + 'top.jpg'" alt="Forest" style="width: 100%">
                        <div class="px-2 p-4">
                            <form class="justify-content-center" action="#" @submit.prevent="add_data">
                                <div class="form-group">
                                    <label class="sr-only">Name</label>
                                    <input type="text" v-model="form.first_name" class="form-control" placeholder="FIRST NAME" :class="{ 'is-invalid': form.errors.has( 'first_name' ) }" name="first_name" required>
                                    <has-error :form="form" field="first_name"></has-error>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Last Name</label>
                                    <input type="text" v-model="form.last_name" class="form-control" placeholder="LAST NAME" :class="{ 'is-invalid': form.errors.has( 'last_name' ) }" name="last_name" required>
                                    <has-error :form="form" field="last_name"></has-error>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Email</label>
                                    <input type="email" v-model="form.email" class="form-control" placeholder="EMAIL" :class="{ 'is-invalid': form.errors.has( 'email' ) }" name="email" required>
                                    <has-error :form="form" field="email"></has-error>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Company</label>
                                    <input type="text" v-model="form.company" class="form-control" placeholder="COMPANY/INSTITUTION" :class="{ 'is-invalid': form.errors.has( 'company' ) }" name="company" required>
                                    <has-error :form="form" field="company"></has-error>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Attend</label>
                                    <select class="custom-select" v-model="form.attend" :class="{ 'is-invalid': form.errors.has( 'attend' ) }" name="attend" id="" required>
                                        <option value="">ATTEND ( Choose One )</option>
                                        <option value="In Person">IN PERSON</option>
                                        <option value="Online">ONLINE</option>
                                    </select>
                                    <has-error :form="form" field="attend"></has-error>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only">Attend</label>
                                    <select class="custom-select" v-model="form.expertise" :class="{ 'is-invalid': form.errors.has( 'expertise' ) }" name="expertise" id="" required>
                                        <option value=""> EXPERTISE ( Choose One )</option>
                                        <option value="Medical">MEDICAL</option>
                                        <option value="Dental">DENTAL</option>
                                        <option value="Pediatric">PEDIATRIC</option>
                                        <option value="Staff Member">STAFF MEMBER</option>
                                    </select>
                                    <has-error :form="form" field="expertise"></has-error>
                                </div>
                                <div class="form-group" style="text-align:left;">
                                    <p style="color:#234262!important; font-size: 11px;"> *All fields are required. </p>
                                </div>
                                <button type="submit" id="sent" class="btn btn-primary btn-lg"> REGISTER NOW! </button><br/><br/>

                                <div class="form-group" v-if="success">
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong> Registration Completed!. </strong>
                                    </div>
                                </div>
                                <div class="form-group" >
                                    <p style="color:#234262!important; font-size: 11px;"> *The Medical Syposium qualifies for Continuing Medical Education. Upon your successful registration you will be provided with a link to access the conference. This Conference link is non transferable.  </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style>
    #cover {
        margin: 0;
        background: radial-gradient(#0399d8, #004389);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        text-align: center;
        display: flex;
        align-items: center;
        position: relative;
    }

    #cover-caption {
        width: 100%;
        position: relative;
        z-index: 1;
    }
    #sent {
        background:#9dd154; /* Old browsers */
        background: -moz-linear-gradient(top,#9dd154 50%, #84bd3f 50%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#9dd154), color-stop(50%,#84bd3f)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,#9dd154 50%,#84bd3f 50%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,#9dd154 50%,#84bd3f 50%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,#9dd154 50%,#84bd3f 50%); /* IE10+ */
        background: linear-gradient(to bottom,#9dd154 50%,#84bd3f 50%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2989d8', endColorstr='#84bd3f',GradientType=0 ); /* IE6-9 */
        border-color: #9dd154;
    }

    #sent:hover {
        background: #919191; /* Old browsers */
        background: -moz-linear-gradient(top, #919191 50%, #6b6b6b 50%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#919191), color-stop(50%,#6b6b6b)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #919191 50%,#6b6b6b 50%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #919191 50%,#6b6b6b 50%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #919191 50%,#6b6b6b 50%); /* IE10+ */
        background: linear-gradient(to bottom, #919191 50%,#6b6b6b 50%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#919191', endColorstr='#6b6b6b',GradientType=0 ); /* IE6-9 */
    }

    /* only used for background overlay not needed for centering */
    form:before {
        content: '';
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        background-color: #fff;
        z-index: -1;

    }
    .form-control, .custom-select  {
        border-radius: 0;
        border: 2px solid #ced4da;
    }

    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        #cover-caption {
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
    }


</style>
<script>
    export default {
        data(  ) {
            return {
                endpoint: '/register',
                form: new Form( {
                    first_name: '',
                    last_name: '',
                    email: '',
                    company: '',
                    attend: '',
                    expertise: '',
                } ),
                success: false,
                btn_disabled: false,
                base_url: window.location.protocol + "//" + window.location.host + "/",
            }
        },
        created(  ) {

        },
        mounted(  ) {

        },
        methods: {
            add_data(  ) {
                let self = this;
                self.btn_disabled = true;
                this.form.post( self.endpoint ).then( ( response ) => {
                    self.success = true;
                    self.btn_disabled = false;
                    this.form.reset(  );
                } );

            },
        },
    }
</script>
