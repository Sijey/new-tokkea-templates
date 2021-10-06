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
                            <span>Code Confirmation</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have requested creation of code.
                            <br /><br />
                            Crypto: <span style="font-weight: 700">ETH</span>
                            <br />
                            Amount: <span style="font-weight: 700">10</span>
                            <br /> <br />
                        </mj-text>
                        <mj-button background-color="#479D7E" border-radius="6px" align="left" href="#">Confirm</mj-button>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
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