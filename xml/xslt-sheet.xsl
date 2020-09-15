<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" />
    <xsl:template match="/">

        <html>
            <body>
                <h2>Izdanja</h2>
                    <xsl:for-each select="izdanja/izdanje">
                <b>Naslov: </b>
                    <xsl:value-of select="naslov"/>
                <br/>
                <b>Autor: </b>
                    <xsl:value-of select="autor"/>
                <br/><br/>
                    </xsl:for-each>
            </body>
        </html>

    </xsl:template>
</xsl:stylesheet>