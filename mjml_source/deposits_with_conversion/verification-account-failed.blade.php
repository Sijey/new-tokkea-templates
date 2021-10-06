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
                            <span>Verification is failed</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            The information you provided was detected as not accurate. Please try to pass verification once again.
                            <br /> <br />
                            Reason for failure: reason reason reason
                            <br /> <br />
                            To get assistance please contact our Support Team by raising the ticket or send email to support@tokkea.exchange
                            <br /> <br />
                        </mj-text>
                        <mj-button background-color="#479D7E" border-radius="6px" align="left" href="#">Go to trade</mj-button>
                        <mj-spacer height="20px" />
                        <mj-include path="../base/message-footer.blade.php" />
                    </mj-column>
                </mj-group>
            </mj-section>
        </mj-wrapper>

        <mj-include path="../base/footer.blade.php" />
    </mj-body>
</mjml>