<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x0026D000 + 0x00064000 + 0x00018000 + 0x00056830) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x083a5000;
$WEBKITCRO_HEAPADR = 0x08582000;
$APPHEAP_PHYSADDR = 0x25000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0013038c;
$COND_THROWFATALERR = 0x0019f0a4;

$ROP_POP_R0R6PC = 0x00105144;
$ROP_POP_R0R8PC = 0x00130ff8;
$ROP_POP_R0PC = 0x0010c320;
$ROP_POP_R1R5PC = 0x00101e98;

$ROP_STR_R1TOR0 = 0x001040d4;
$ROP_LDR_R0FROMR0 = 0x0011168c;
$ROP_ADDR0_TO_R1 = 0x0012bb98;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x0016882c;

$srv_GetServiceHandle = 0x0023c454;

$svcGetProcessId = 0x00100ca4;
$svcSendSyncRequest = 0x002443ec;
$svcControlMemory = 0x001431c0;
$svcSleepThread = 0x0010420c;

$GXLOW_CMD4 = 0x0011dd80;
$GSPGPU_SERVHANDLEADR = 0x003da72c;

$FS_MOUNTSDMC = 0x0019ca28;

$IFile_Open = 0x0022fe44;
$IFile_GetSize = 0x002074fc;
$IFile_Seek = 0x00151658;
$IFile_Read = 0x001686c0;

$FS_DELETEFILE = 0x001683a4;

$FSFILEIPC_CLOSE = 0x0027ec40;
$FSFILEIPC_READ = 0x0027ebe8;
$FSFILEIPC_GETSIZE = 0x0027eccc;

$POPPC = 0x001057e0;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x0002f9f0;

$WKC_FOPEN = $OSSCRO_MAPADR+0x5d0-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0x5c8-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0x5d8-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0x5e0-0x4;
$WKC_FSEEK = $OSSCRO_MAPADR+0x5f0-0x4;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0xe9c-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0xea4-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0xecc-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0xa2c-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x194-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x30c-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0x3c0-0x4;

$GSP_FLUSHDCACHE = 0x001914fc;
$GSP_WRITEHWREGS = 0x0011e188;

$IFile_Close = 0x001fdbc0;
$IFile_Write = 0x00168748;

$OPENFILEDIRECTLY_WRAP = 0x0027b5e0;

$THROW_FATALERR = 0x00151b08;

$ROP_POP_R0IPPC = 0x0018c9a4;

$ROP_LDR_R0_FROMR0_SHIFTR1 = 0x00101218;

$ROP_LDMSTM_R5R4_R0R3 = 0x001d3ef0;

$ROP_STMR0_R0PC = 0x001bb4c4;

$ROP_LDRR0R4_LDRR0_R0OFF4_LDRR0_R0OFF34_OBJVTABLECALL_5C_POPR4LR = $WEBKITCRO_MAPADR+0x0036fe48;

?>
