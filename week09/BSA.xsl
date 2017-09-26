<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" />
    <xsl:template match="/">
        <html>
            <head>
                <link rel="stylesheet" type="text/css" href="BSA.css"/>

                <script>
                    function reset(){
                    location.reload();
                    }
                    function showTroop(troopnum) {


                    document.getElementById(troopnum).style.display='block';
                    }
                </script>
                <title>BSA</title>
            </head>
            <body>
                <h1>Boy Scouts of America</h1>
                <xsl:for-each select="bsa/council">
                    <h2><xsl:value-of select="@name" /> Council </h2>
                        <ul>
                            <xsl:for-each select="troop">
                            <xsl:variable name="troopnum" select="@number"/>
                                <li onclick="showTroop({$troopnum})"><a ><xsl:attribute name="href">#<xsl:value-of select="@number"/>
                                </xsl:attribute><xsl:value-of select="@unitName"/><br/><xsl:value-of select="@number" /></a></li>

                            </xsl:for-each>
                        </ul>
                    <xsl:for-each select="troop">
                        <xsl:variable name="troopnum" select="@number"/>
                        <div class="troop" > <xsl:attribute name="id"><xsl:value-of select="@number"/>
                    </xsl:attribute>
                    <h3>Troop <xsl:value-of select="@number" /></h3>
                            <span onclick="reset()"><a href="#">Back to top</a></span>

                        <xsl:for-each select="scout">
                            <div class="scout">

                                <xsl:value-of select="firstName" /> <xsl:text> </xsl:text> <xsl:value-of select="lastName" /><br/>
                               <hr style="max-width: 100%; margin-top:0"/>
                                Address<br/>
                                <xsl:value-of select="address/street" /><br/>
                                <xsl:value-of select="address/city" />, <xsl:value-of select="address/state" /><br/>

                                <xsl:value-of select="phone" /><br/>


                            <table style="display:inline;">
                                <tr>
                                    <th>Rank</th>
                                    <th>Date Earned</th>
                                </tr>
                                <xsl:for-each select="rank">
                                    <tr>
                                        <td><xsl:value-of select="." /></td>
                                        <td><xsl:value-of select="@date-earned" /></td>
                                    </tr>
                                </xsl:for-each>
                            </table>

                            <table style="display:inline;">
                                <tr>
                                    <th>Merit Badge</th>
                                    <th>Date Earned</th>
                                </tr>
                                <xsl:for-each select="meritBadge">
                                    <tr>
                                        <td><xsl:value-of select="." /></td>
                                        <td><xsl:value-of select="@date-earned" /></td>
                                    </tr>
                                </xsl:for-each>
                            </table>
                            </div>
                        </xsl:for-each>
                    </div>
                    <hr/>
                </xsl:for-each>
                </xsl:for-each>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>