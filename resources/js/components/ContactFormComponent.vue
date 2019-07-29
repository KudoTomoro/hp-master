<template>
  <div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        会社名
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('company')}"
        :message="errors.first('company')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="company"
            name="company"
            v-validate="'required'"
            data-vv-as="会社名"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        氏名
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('name')}"
        :message="errors.first('name')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="name"
            name="name"
            v-validate="'required'"
            data-vv-as="氏名"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        電話番号
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('tel')}"
        :message="errors.first('tel')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="tel"
            name="tel"
            v-validate="'required|numeric'"
            data-vv-as="電話番号"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        メールアドレス
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('email')}"
        :message="errors.first('email')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="email"
            type="email"
            name="email"
            v-validate="'required|email'"
            custom-class="long"
            data-vv-as="メールアドレス"
            ref="email"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        メールアドレス確認
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('confirmEmail')}"
        :message="errors.first('confirmEmail')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="confirmEmail"
            type="email"
            name="confirmEmail"
            v-validate="'required|email|confirmed:email'"
            custom-class="long"
            data-vv-as="メールアドレス"
            autocomplete="off"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        件名
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('subject')}"
        :message="errors.first('subject')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="subject"
            name="subject"
            v-validate="'required'"
            custom-class="long"
            data-vv-as="件名"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contact__item'>
      <p class='c-contact__label'>
        本文
        <span class='c-contact__must'>*</span>
      </p>
      <b-field
        :type="{'is-danger': errors.has('message')}"
        :message="errors.first('message')"
      >
        <div class='c-contact__input'>
          <b-input
            v-model="message"
            name="message"
            v-validate="'required'"
            maxlength="2000"
            type="textarea"
            data-vv-as="本文"
          />
        </div>
      </b-field>
    </div>
    <div class='c-contant__button'>
      <div class='c-contact__button__submit'>
        <input
          class='c-form__submit'
          :disabled="validation"
          id='confirmation_button'
          @click="validateBeforeSubmit"
          type='button'
          value='送信'
        >
        <input
          id='submit'
          style='display: none'
          type='submit'
        >
      </div>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
import { VueReCaptcha } from "vue-recaptcha-v3";
Vue.use(VueReCaptcha, {
  siteKey: process.env.MIX_RECAPTCHA_SITEKEY,
  useRecaptchaNet: true
});

export default {
  data: function() {
    return {
      company: "",
      name: "",
      tel: "",
      email: "",
      confirmEmail: "",
      subject: "",
      message: ""
    };
  },
  methods: {
    validateBeforeSubmit: function() {
      const self = this;
      this.$recaptcha("homepage").then(function(token) {
        if (token) {
          const vm = self;
          self.$validator
            .validateAll()
            .then(function(res) {
              vm.submit(token);
              vm.$dialog.alert({
                title: "送信完了",
                message:
                  "この度はお問い合わせいただきありがとうございました。<br>担当者より、2,3営業日以内にご返信させていただきます。<br><br>なお、万が一返信が届かない場合は、大変お手数ですが再度お問い合わせいただきますようお願い申し上げます。<br><br>株式会社techtec<br>問い合わせ窓口担当",
                animation: "fade",
                size: "is-small"
              });
            })
            .catch(function(error) {
              //   console.log(error);
            });
        }
      });
    },
    submit: function(token) {
      const self = this;
      const param = {
        company: this.company,
        name: this.name,
        tel: this.tel,
        email: this.email,
        subject: this.subject,
        message: this.message,
        token: token
      };
      axios.post("/contact", param).catch(function(error) {
        //   console.log(error);
      });
    }
  },
  computed: {
    validation: function() {
      return (
        !this.company.length ||
        !this.name.length ||
        !this.tel.length ||
        !this.email.length ||
        !this.confirmEmail.length ||
        !this.subject.length ||
        !this.message.length
      );
    }
  }
};
</script>

<style>
.input,
.textarea {
  box-shadow: none;
}

.textarea {
  border-radius: 0;
}
</style>
