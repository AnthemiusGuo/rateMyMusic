<?php
include_once(APPPATH."models/fields/field_free_enum.php");
class Field_nationid extends Field_free_enum {
    
    public function __construct($show_name,$name,$is_must_input=false) {
        parent::__construct($show_name,$name,$is_must_input);
        $this->typ = "Field_nationid";
        // <ul id="country_ul" class=""><li value="1" id="country_0" class="">中国</li><li value="ALB" id="country_1">阿尔巴尼亚</li><li value="DZA" id="country_2">阿尔及利亚</li><li value="AFG" id="country_3" class="">阿富汗</li><li value="ARG" id="country_4" class="">阿根廷</li><li value="ARE" id="country_5">阿拉伯联合酋长国</li><li value="ABW" id="country_6">阿鲁巴</li><li value="OMN" id="country_7">阿曼</li><li value="AZE" id="country_8">阿塞拜疆</li><li value="ASC" id="country_9">阿森松岛</li><li value="EGY" id="country_10">埃及</li><li value="ETH" id="country_11">埃塞俄比亚</li><li value="IRL" id="country_12">爱尔兰</li><li value="EST" id="country_13" class="">爱沙尼亚</li><li value="AND" id="country_14">安道尔</li><li value="AGO" id="country_15">安哥拉</li><li value="AIA" id="country_16">安圭拉</li><li value="ATG" id="country_17">安提瓜岛和巴布达</li><li value="AUS" id="country_18">澳大利亚</li><li value="AUT" id="country_19">奥地利</li><li value="ALA" id="country_20">奥兰群岛</li><li value="BRB" id="country_21">巴巴多斯岛</li><li value="PNG" id="country_22">巴布亚新几内亚</li><li value="BHS" id="country_23">巴哈马</li><li value="PAK" id="country_24">巴基斯坦</li><li value="PRY" id="country_25">巴拉圭</li><li value="PSE" id="country_26">巴勒斯坦</li><li value="BHR" id="country_27">巴林</li><li value="PAN" id="country_28">巴拿马</li><li value="BRA" id="country_29" class="">巴西</li><li value="BLR" id="country_30">白俄罗斯</li><li value="BMU" id="country_31">百慕大</li><li value="BGR" id="country_32">保加利亚</li><li value="MNP" id="country_33">北马里亚纳群岛</li><li value="BEN" id="country_34">贝宁</li><li value="BEL" id="country_35">比利时</li><li value="ISL" id="country_36">冰岛</li><li value="PRI" id="country_37">波多黎各</li><li value="POL" id="country_38">波兰</li><li value="BOL" id="country_39">玻利维亚</li><li value="BIH" id="country_40">波斯尼亚和黑塞哥维那</li><li value="BWA" id="country_41">博茨瓦纳</li><li value="BLZ" id="country_42">伯利兹</li><li value="BTN" id="country_43">不丹</li><li value="BFA" id="country_44">布基纳法索</li><li value="BDI" id="country_45">布隆迪</li><li value="BVT" id="country_46">布韦岛</li><li value="PRK" id="country_47">朝鲜</li><li value="DNK" id="country_48">丹麦</li><li value="DEU" id="country_49">德国</li><li value="TLS" id="country_50">东帝汶</li><li value="TGO" id="country_51">多哥</li><li value="DMA" id="country_52">多米尼加</li><li value="DOM" id="country_53">多米尼加共和国</li><li value="RUS" id="country_54">俄罗斯</li><li value="ECU" id="country_55">厄瓜多尔</li><li value="ERI" id="country_56">厄立特里亚</li><li value="FRA" id="country_57">法国</li><li value="FRO" id="country_58">法罗群岛</li><li value="PYF" id="country_59">法属波利尼西亚</li><li value="GUF" id="country_60">法属圭亚那</li><li value="ATF" id="country_61">法属南部领地</li><li value="VAT" id="country_62">梵蒂冈</li><li value="PHL" id="country_63">菲律宾</li><li value="FJI" id="country_64">斐济</li><li value="FIN" id="country_65">芬兰</li><li value="CPV" id="country_66">佛得角</li><li value="FLK" id="country_67">弗兰克群岛</li><li value="GMB" id="country_68">冈比亚</li><li value="COG" id="country_69">刚果</li><li value="COD" id="country_70">刚果民主共和国</li><li value="COL" id="country_71" class="">哥伦比亚</li><li value="CRI" id="country_72">哥斯达黎加</li><li value="GGY" id="country_73">格恩西岛</li><li value="GRD" id="country_74">格林纳达</li><li value="GRL" id="country_75">格陵兰</li><li value="CUB" id="country_76">古巴</li><li value="GLP" id="country_77">瓜德罗普</li><li value="GUM" id="country_78">关岛</li><li value="GUY" id="country_79">圭亚那</li><li value="KAZ" id="country_80">哈萨克斯坦</li><li value="HTI" id="country_81">海地</li><li value="KOR" id="country_82">韩国</li><li value="NLD" id="country_83">荷兰</li><li value="ANT" id="country_84">荷属安地列斯</li><li value="HMD" id="country_85">赫德和麦克唐纳群岛</li><li value="HND" id="country_86">洪都拉斯</li><li value="KIR" id="country_87">基里巴斯</li><li value="DJI" id="country_88">吉布提</li><li value="KGZ" id="country_89">吉尔吉斯斯坦</li><li value="GIN" id="country_90">几内亚</li><li value="GNB" id="country_91">几内亚比绍</li><li value="CAN" id="country_92">加拿大</li><li value="GHA" id="country_93">加纳</li><li value="GAB" id="country_94">加蓬</li><li value="KHM" id="country_95">柬埔寨</li><li value="CZE" id="country_96">捷克共和国</li><li value="ZWE" id="country_97">津巴布韦</li><li value="CMR" id="country_98">喀麦隆</li><li value="QAT" id="country_99">卡塔尔</li><li value="CYM" id="country_100">开曼群岛</li><li value="CCK" id="country_101">科科斯群岛</li><li value="COM" id="country_102">科摩罗</li><li value="CIV" id="country_103">科特迪瓦</li><li value="KWT" id="country_104">科威特</li><li value="HRV" id="country_105">克罗地亚</li><li value="KEN" id="country_106">肯尼亚</li><li value="COK" id="country_107">库克群岛</li><li value="LVA" id="country_108">拉脱维亚</li><li value="LSO" id="country_109">莱索托</li><li value="LAO" id="country_110">老挝</li><li value="LBN" id="country_111">黎巴嫩</li><li value="LBR" id="country_112">利比里亚</li><li value="LBY" id="country_113">利比亚</li><li value="LTU" id="country_114" class="">立陶宛</li><li value="LIE" id="country_115">列支敦士登</li><li value="REU" id="country_116">留尼旺岛</li><li value="LUX" id="country_117">卢森堡</li><li value="RWA" id="country_118">卢旺达</li><li value="ROU" id="country_119">罗马尼亚</li><li value="MDG" id="country_120">马达加斯加</li><li value="MDV" id="country_121">马尔代夫</li><li value="MLT" id="country_122">马耳他</li><li value="MWI" id="country_123">马拉维</li><li value="MYS" id="country_124">马来西亚</li><li value="MLI" id="country_125">马里</li><li value="MKD" id="country_126">马其顿</li><li value="MHL" id="country_127">马绍尔群岛</li><li value="MTQ" id="country_128">马提尼克</li><li value="MYT" id="country_129">马约特岛</li><li value="IMN" id="country_130">曼岛</li><li value="MUS" id="country_131">毛里求斯</li><li value="MRT" id="country_132">毛里塔尼亚</li><li value="USA" id="country_133">美国</li><li value="ASM" id="country_134">美属萨摩亚</li><li value="UMI" id="country_135">美属外岛</li><li value="MNG" id="country_136">蒙古</li><li value="MSR" id="country_137">蒙特塞拉特</li><li value="BGD" id="country_138">孟加拉</li><li value="FSM" id="country_139">密克罗尼西亚</li><li value="PER" id="country_140">秘鲁</li><li value="MMR" id="country_141">缅甸</li><li value="MDA" id="country_142">摩尔多瓦</li><li value="MAR" id="country_143">摩洛哥</li><li value="MCO" id="country_144">摩纳哥</li><li value="MOZ" id="country_145">莫桑比克</li><li value="MEX" id="country_146">墨西哥</li><li value="NAM" id="country_147">纳米比亚</li><li value="ZAF" id="country_148">南非</li><li value="ATA" id="country_149">南极洲</li><li value="SGS" id="country_150">南乔治亚和南桑德威奇群岛</li><li value="NRU" id="country_151">瑙鲁</li><li value="NPL" id="country_152">尼泊尔</li><li value="NIC" id="country_153">尼加拉瓜</li><li value="NER" id="country_154">尼日尔</li><li value="NGA" id="country_155">尼日利亚</li><li value="NIU" id="country_156">纽埃</li><li value="NOR" id="country_157">挪威</li><li value="NFK" id="country_158" class="">诺福克</li><li value="PLW" id="country_159">帕劳群岛</li><li value="PCN" id="country_160">皮特凯恩</li><li value="PRT" id="country_161">葡萄牙</li><li value="GEO" id="country_162">乔治亚</li><li value="JPN" id="country_163">日本</li><li value="SWE" id="country_164">瑞典</li><li value="CHE" id="country_165">瑞士</li><li value="SLV" id="country_166">萨尔瓦多</li><li value="WSM" id="country_167">萨摩亚</li><li value="SCG" id="country_168">塞尔维亚,黑山</li><li value="SLE" id="country_169">塞拉利昂</li><li value="SEN" id="country_170">塞内加尔</li><li value="CYP" id="country_171">塞浦路斯</li><li value="SYC" id="country_172">塞舌尔</li><li value="SAU" id="country_173">沙特阿拉伯</li><li value="CXR" id="country_174">圣诞岛</li><li value="STP" id="country_175">圣多美和普林西比</li><li value="SHN" id="country_176">圣赫勒拿</li><li value="KNA" id="country_177">圣基茨和尼维斯</li><li value="LCA" id="country_178">圣卢西亚</li><li value="SMR" id="country_179">圣马力诺</li><li value="SPM" id="country_180">圣皮埃尔和米克隆群岛</li><li value="VCT" id="country_181">圣文森特和格林纳丁斯</li><li value="LKA" id="country_182">斯里兰卡</li><li value="SVK" id="country_183">斯洛伐克</li><li value="SVN" id="country_184">斯洛文尼亚</li><li value="SJM" id="country_185">斯瓦尔巴和扬马廷</li><li value="SWZ" id="country_186">斯威士兰</li><li value="SDN" id="country_187">苏丹</li><li value="SUR" id="country_188">苏里南</li><li value="SLB" id="country_189">所罗门群岛</li><li value="SOM" id="country_190">索马里</li><li value="TJK" id="country_191">塔吉克斯坦</li><li value="THA" id="country_192">泰国</li><li value="TZA" id="country_193">坦桑尼亚</li><li value="TON" id="country_194">汤加</li><li value="TCA" id="country_195">特克斯和凯克特斯群岛</li><li value="TAA" id="country_196">特里斯坦达昆哈</li><li value="TTO" id="country_197">特立尼达和多巴哥</li><li value="TUN" id="country_198">突尼斯</li><li value="TUV" id="country_199">图瓦卢</li><li value="TUR" id="country_200">土耳其</li><li value="TKM" id="country_201">土库曼斯坦</li><li value="TKL" id="country_202">托克劳</li><li value="WLF" id="country_203">瓦利斯和福图纳</li><li value="VUT" id="country_204" class="">瓦努阿图</li><li value="GTM" id="country_205">危地马拉</li><li value="VIR" id="country_206">维尔京群岛，美属</li><li value="VGB" id="country_207">维尔京群岛，英属</li><li value="VEN" id="country_208">委内瑞拉</li><li value="BRN" id="country_209">文莱</li><li value="UGA" id="country_210">乌干达</li><li value="UKR" id="country_211">乌克兰</li><li value="URY" id="country_212">乌拉圭</li><li value="UZB" id="country_213">乌兹别克斯坦</li><li value="ESP" id="country_214">西班牙</li><li value="GRC" id="country_215">希腊</li><li value="SGP" id="country_216">新加坡</li><li value="NCL" id="country_217">新喀里多尼亚</li><li value="NZL" id="country_218">新西兰</li><li value="HUN" id="country_219">匈牙利</li><li value="SYR" id="country_220">叙利亚</li><li value="JAM" id="country_221" class="">牙买加</li><li value="ARM" id="country_222">亚美尼亚</li><li value="YEM" id="country_223">也门</li><li value="IRQ" id="country_224">伊拉克</li><li value="IRN" id="country_225">伊朗</li><li value="ISR" id="country_226">以色列</li><li value="ITA" id="country_227">意大利</li><li value="IND" id="country_228">印度</li><li value="IDN" id="country_229" class="">印度尼西亚</li><li value="GBR" id="country_230" class="">英国</li><li value="IOT" id="country_231" class="">英属印度洋领地</li><li value="JOR" id="country_232">约旦</li><li value="VNM" id="country_233">越南</li><li value="ZMB" id="country_234">赞比亚</li><li value="JEY" id="country_235">泽西岛</li><li value="TCD" id="country_236">乍得</li><li value="GIB" id="country_237">直布罗陀</li><li value="CHL" id="country_238">智利</li><li value="CAF" id="country_239">中非共和国</li></ul>
        $this->setEnum(array(
        	0=>'未设置',
        	1=>"中国",
        	12=>"天津",
        	13=>"河北",
        	14=>"山西",
        	15=>"内蒙古",
        	21=>"辽宁",
        	22=>"吉林",
        	23=>"黑龙江",
        	31=>"上海",
        	32=>"江苏",
        	33=>"浙江",
        	34=>"安徽",
        	35=>"福建",
        	36=>"江西",
        	37=>"山东",
        	41=>"河南",
        	42=>"湖北",
        	43=>"湖南",
        	44=>"广东",
        	45=>"广西",
        	46=>"海南",
        	50=>"重庆",
        	51=>"四川",
        	52=>"贵州",
        	53=>"云南",
        	54=>"西藏",
        	61=>"陕西",
        	62=>"甘肃",
        	63=>"青海",
        	64=>"宁夏",
        	65=>"新疆",
        	71=>"台湾",
        	81=>"香港",
        	82=>"澳门",
        	100=>"其他",
        	400=>"海外",
        ));
    }
}
?>