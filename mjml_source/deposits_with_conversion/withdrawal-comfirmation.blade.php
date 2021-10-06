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
                            <span>Withdrawal Requested</span>
                        </mj-text>
                        <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
                        <mj-text css-class="content-text">
                            You have requested withdrawal:
                            <br /><br />
                            Crypto: <span style="font-weight: 700">ETH</span>
                            <br />
                            Amount: <span style="font-weight: 700">10</span>
                            <br />
                            Withdrawal address: <span style="font-weight: 700">0x9A9158492A37664a45Fb38F54d08c066c385f5D1</span>
                            <br /><br />
                            Please check the address thoroughly and confirm the withdrawal by clicking the button below.
                            <br /><br />
                        </mj-text>
                        <mj-button background-color="#479D7E" border-radius="6px" align="left" href="#">Confirm withdrawl</mj-button>
                        <mj-spacer height="20px" />
                        <mj-text css-class="content-text">
                            Alternatively, you can copy the link below to the address bar of your browser for confirmation.<br /><a href="#"  target="_blank" style="color: #479D7E;">https://assets/withdraw?confirmCode=ba63bc84-1c0f-4012-a5bb-9e94e8042f17</a>
                        </mj-text>
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