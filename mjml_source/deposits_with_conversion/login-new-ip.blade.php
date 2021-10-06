<mjml>
    <mj-include path="../base/head.blade.php" />
    <mj-body background-color="#1E1F27" width="520px">
        <mj-include path="../base/header.blade.php" />
        <mj-wrapper css-class="content-wrap">
            <mj-section css-class="content">
                <mj-group>
                    <mj-column vertical-align="middle">
                        <mj-text css-class="content-title">
                            <span>Authorize New Device</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have recently attempted to sign in to your Tokkea account from a new device or location.
                            As a security measure, we require additional confirmation before allowing access to your
                            Tokkea account
                            <br /><br />
                            IP address: <span style="font-weight: 700">
                            192.168.0.0
                        </span><br />
                            Device: <span style="font-weight: 700">
                            Desktop Win 10
                        </span><br />
                            Date: <span style="font-weight: 700">
                            2021-10-12 08:50:00
                        </span><br /><br />
                            If you recognize this activity, please confirm it with the activation code. Here is your account activation code:
                            <br /><br />
                            <span style="font-size: 20px; font-weight: 700">484431</span>
                            <br /><br />
                            <span style="color: #ffa500; font-size: 14px">
                                The verification code will be valid for 30 minutes and please do not share it with anyone.
                            </span>
                            <br /><br />
                            If you didn't initiate this activity, please contact our support team at <a href="mailto:support@tokkea.exchange" style="color: #479D7E;">
                            support@tokkea.exchange
                        </a> or proceed to <a href="#" target="_blank" style="color: #479D7E;">tokkea/support</a>
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