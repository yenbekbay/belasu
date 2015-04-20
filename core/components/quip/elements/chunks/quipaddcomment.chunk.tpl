[[+preview]]
   <span class="success" id="success-[[+idprefix]]">[[+successMsg]]</span>

   <form id="add-comment-[[+idprefix]]" action="[[+url]]#comment-preview-box-[[+idprefix]]" method="post">
    <div class="comment add-comment">
     <input type="hidden" name="nospam" value="" />
     <input type="hidden" name="thread" value="[[+thread]]" />
     <input type="hidden" name="parent" value="[[+parent]]" />
     <input type="hidden" name="auth_nonce" value="[[+auth_nonce]]" />
     <input type="hidden" name="preview_mode" value="[[+preview_mode]]" />

     <div class="fld">
      <label for="comment-name-[[+idprefix]]">[[%quip.name? &namespace=`quip` &topic=`default`]]:<span class="error">[[+error.name]]</span></label>
      <input type="text" name="name" id="comment-name-[[+idprefix]]" value="[[+name]]" />
      <br />
    </div>
    
    <div class="fld">
     <label for="comment-email-[[+idprefix]]">[[%quip.email]]:<span class="error">[[+error.email]]</span></label>
     <input type="text" name="email" id="comment-email-[[+idprefix]]" value="[[+email]]" />
     <br />
    </div>
    
    <div class="fld">
     <label for="comment-website-[[+idprefix]]">[[%quip.website]]:<span class="error">[[+error.website]]</span></label>
     <input type="text" name="website" id="comment-website-[[+idprefix]]" value="[[+website]]" />
     <br />
    </div>

    <div class="fld">
     [[+unsubscribe:default=`
      <label for="comment-notify-[[+idprefix]]">[[%quip.notify_me]]:<span class="error">[[+error.notify]]</span></label>
      <input type="checkbox" value="1" name="notify" id="comment-notify-[[+idprefix]]" [[+notifyChecked]] />
     `]]
     <br />
    </div>

    <div class="fld recaptcha">
     [[+quip.recaptcha_html]]
     <span class="error">[[+error.recaptcha]]</span>
    </div>
    
    <p><span class="allowed-tags">[[%quip.allowed_tags? &tags=`[[++quip.allowed_tags:htmlent]]`]]</span>[[%quip.comment_add_new]]<span class="error">[[+error.comment]]</span></p>
    <textarea name="comment" id="comment-box-[[+idprefix]]" rows="5">[[+comment]]</textarea>
    
    <button type="submit" name="[[+preview_action]]" value="1">[[%quip.preview]]</button>
    [[+can_post:is=`1`:then=`<button type="submit" name="[[+post_action]]" value="1">[[%quip.post]]</button>`]]
    
    <br class="clear" />
    </div>
   </form>