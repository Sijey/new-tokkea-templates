<mjml>
    <mj-include path="../base/head.blade.php" />
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="../base/header.blade.php" />
        <mj-section css-class="phishing-content">
            <mj-column>
                <mj-text css-class="phishing-text">
                    Anti-phishing: <span style="color: #FFFFFF">3451</span>
                </mj-text>
            </mj-column>
        </mj-section>
        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Password Reset Request</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have received this email because we've got a request for the password reset for your account.
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-button background-color="#479D7E" border-radius="6px" align="left" href="#">Reset password</mj-button>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            If you did not request a password reset, no further action is required.
                            <br /><br />
                            If you face any issues clicking the "Reset Password" button, copy and paste the URL below into your web browser
                            <a href="#"  target="_blank" style="color: #479D7E;">https://token=dc1fa302cc44e11dad67a577454ae
                                7065055d12610c374e62330e629934c274</a>
                        </mj-text>
                        <mj-spacer height="20px" />
                        <mj-include path="../base/message-footer.blade.php" />
                    </mj-column>
                </mj-group>
            </mj-section>
        </mj-wrapper>

        <mj-include path="../base/footer.blade.php" />
    </mj-body>
</mjml>