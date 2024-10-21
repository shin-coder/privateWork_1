<?php get_header(); ?>
      <section class="l-form__head">
        <div class="p-contact__wrap">
          <div class="p-contact__image"></div>
          <div class="p-contact__ttl">
            <h1 class="p-contact__ttl _main">CONTACT</h1>
            <p class="p-contact__ttl _sub">採用フォーム</p>
          </div>
        </div>
      </section>
      <section class="l-form__area">
        <form action="#">
          <div class="p-form__item">
            <label for="username" class="c-text p-form__ttl"
              >氏名<strong class="c-text label-required">必須</strong></label
            >
            <div class="p-form__boby">
              <div class="p-inputFeild _half">
                <input
                  type="text"
                  name="username"
                  id="username"
                  maxlength="20"
                  required
                />
              </div>
            </div>
          </div>
          <div class="p-form__item">
            <label for="email" class="c-text p-form__ttl"
              >メールアドレス<strong class="c-text label-required"
                >必須</strong
              ></label
            >
            <div class="p-form__boby">
              <div class="p-inputFeild">
                <input
                  type="email"
                  name="email"
                  id="email"
                  maxlength="20"
                  placeholder="sample@gmail.com"
                  required
                />
              </div>
            </div>
          </div>
          <div class="p-form__item">
            <label for="age" class="c-text p-form__ttl"
              >生年月日<strong class="c-text label-required"
                >必須</strong
              ></label
            >
            <div class="p-form__boby">
              <div class="p-inputFeild _half">
                <input
                  type="text"
                  name="age"
                  id="age"
                  maxlength="20"
                  placeholder="1993/03/03"
                  required
                />
              </div>
            </div>
          </div>
          <div class="p-form__item">
            <fieldset>
              <div class="c-text p-form__ttl">
                <legend>希望職種<span class="label-any">任意</span></legend>
              </div>
              <div class="p-form__boby">
                <ul class="c-text p-radioList">
                  <li>
                    <label
                      ><input type="radio" name="job" value="営業" /><span
                        >営業</span
                      ></label
                    >
                  </li>
                  <li>
                    <label
                      ><input type="radio" name="job" value="研究開発" /><span
                        >研究開発</span
                      ></label
                    >
                  </li>
                  <li>
                    <label
                      ><input
                        type="radio"
                        name="job"
                        value="カスタマーサポート"
                      /><span>カスタマーサポート</span></label
                    >
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
          <div class="p-form__item">
            <label for="motive" class="p-form__ttl c-text"
              >志望動機<strong class="c-text label-required"
                >必須</strong
              ></label
            >
            <div class="p-form__boby">
              <div class="p-inputFeild">
                <textarea cols="30" rows="5" required></textarea>
              </div>
            </div>
          </div>
          <div class="btnArea">
            <button class="submitBtn">会員登録する</button>
          </div>
        </form>
      </section>
<?php get_footer(); ?>