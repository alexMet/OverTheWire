ssh -p 2220 banditXX@bandit.labs.overthewire.org

## Level00:

```
bandit0@bandit:~$ ls
readme
bandit0@bandit:~$ cat readme
boJ9jbbUNNfktd78OOpsqOltutMc3MY1
```

## Level01:

```
bandit1@bandit:~$ ls
-
bandit1@bandit:~$ cat ./-
CV1DtqXWVFXTvM2F0k09SHz0YwRINYA9
```

## Level02:

```
bandit2@bandit:~$ ls
spaces in this filename
bandit2@bandit:~$ cat spaces\ in\ this\ filename
UmHadQclWmgdLOKQ3YNgjWxGoRMb5luK
```

## Level03:

```
bandit3@bandit:~$ ls
inhere
bandit3@bandit:~$ cd inhere/
bandit3@bandit:~/inhere$ ls
bandit3@bandit:~/inhere$ ls -la
total 12
drwxr-xr-x 2 root    root    4096 Sep 28 14:04 .
drwxr-xr-x 4 bandit3 bandit3 4096 Oct  5 12:12 ..
-rw-r----- 1 bandit4 bandit3   33 Sep 28 14:04 .hidden
bandit3@bandit:~/inhere$ cat .hidden
pIwrPrtPN36QITSp3EQaw936yaFoFgAB`
```

## Level04:

```
bandit4@bandit:~$ ls
inhere
bandit4@bandit:~$ cd inhere/
bandit4@bandit:~/inhere$ ls -la
total 48
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file00
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file01
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file02
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file03
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file04
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file05
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file06
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file07
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file08
-rw-r----- 1 bandit5 bandit4   33 Sep 28 14:04 -file09
drwxr-xr-x 2 root    root    4096 Sep 28 14:04 .
drwxr-xr-x 4 bandit4 bandit4 4096 Oct  5 12:13 ..
bandit4@bandit:~/inhere$ file *
file: Cannot open `ile00' (No such file or directory).
file: Cannot open `ile01' (No such file or directory).
file: Cannot open `ile02' (No such file or directory).
file: Cannot open `ile03' (No such file or directory).
file: Cannot open `ile04' (No such file or directory).
file: Cannot open `ile05' (No such file or directory).
file: Cannot open `ile06' (No such file or directory).
file: Cannot open `ile07' (No such file or directory).
file: Cannot open `ile08' (No such file or directory).
file: Cannot open `ile09' (No such file or directory).
bandit4@bandit:~/inhere$ file ./-*
./-file00: Non-ISO extended-ASCII text, with CR line terminators, with escape sequences
./-file01: data
./-file02: data
./-file03: data
./-file04: data
./-file05: data
./-file06: data
./-file07: ASCII text
./-file08: data
./-file09: data
bandit4@bandit:~/inhere$ cat ./-file07
koReBOKuIDDepwhWk7jZC0RTdopnAYKh
```

## Level05:

```
bandit5@bandit:~$ ls -a
.  ..  .bash_logout  .bashrc  .cache  .profile  inhere
bandit5@bandit:~$ cd inhere/
bandit5@bandit:~/inhere$ ls
maybehere00  maybehere02  maybehere04  maybehere06  maybehere08  maybehere10  maybehere12  maybehere14  maybehere16  maybehere18
maybehere01  maybehere03  maybehere05  maybehere07  maybehere09  maybehere11  maybehere13  maybehere15  maybehere17  maybehere19
bandit5@bandit:~/inhere$ find -size 1033c -readable ! -executable
./maybehere07/.file2
bandit5@bandit:~/inhere$ cat $(find -size 1033c -readable ! -executable)
DXjZPULLxYr17uwoI01bNLQbtFemEgo7
```

## Level06:

```
bandit6@bandit:~$ cat $(find / -user bandit7 -group bandit6 -size 33c 2>/dev/null)
HKBPTKQnIay4Fw76bEy8PVxKEDQRKTzs
```

## Level07:

```
bandit7@bandit:~$ cat data.txt | grep millionth
millionth	cvX2JJa4CFALtqS87jk27qwqGhBM9plV
```

## Level08:

```
bandit8@bandit:~$ sort data.txt | uniq -u
UsvVyFSfZZWbi6wgC7dAFyFuR6jQQUhR
```

## Level09:

```
bandit9@bandit:~$ strings data.txt | grep "^=+*"
========== password
=r-3
========== is
========== truKLdjsbJ5g7yyJ2X2R0o3a5HQJFuLk
=M Q
```

## Level10:

```
bandit10@bandit:~$ ls
data.txt
bandit10@bandit:~$ cat data.txt
VGhlIHBhc3N3b3JkIGlzIElGdWt3S0dzRlc4TU9xM0lSRnFyeEUxaHhUTkViVVBSCg==
bandit10@bandit:~$ base64 -d data.txt
The password is IFukwKGsFW8MOq3IRFqrxE1hxTNEbUPR
```

## Level11:

```
bandit11@bandit:~$ ls
data.txt
bandit11@bandit:~$ cat data.txt
Gur cnffjbeq vf 5Gr8L4qetPEsPk8htqjhRK8XSP6x2RHh
bandit11@bandit:~$ tr a-zA-Z n-za-mN-ZA-M < data.txt
The password is 5Te8Y4drgCRfCx8ugdwuEX8KFC6k2EUu
```

## Level12:

```
bandit12@bandit:~$ ls
data.txt
bandit12@bandit:~$ cat data.txt
0000000: 1f8b 0808 5601 cd59 0203 6461 7461 322e  ....V..Y..data2.
0000010: 6269 6e00 013f 02c0 fd42 5a68 3931 4159  bin..?...BZh91AY
0000020: 2653 5914 13ca ff00 001b ffff faef 7fff  &SY.............
0000030: f9fb a79e de5b efbb ffff fd7f cf7b fbff  .....[.......{..
0000040: ff7f afbd 8ddb ff77 f752 ffff b001 3b56  .......w.R....;V
0000050: 6100 01a3 d400 0000 0068 d0d0 69a0 0000  a........h..i...
0000060: 007a 867a 9034 0340 6401 a340 0000 f280  .z.z.4.@d..@....
0000070: 01ea 0d1a 1a1a 0d01 9034 0e40 0000 0686  .........4.@....
0000080: 8d00 00c8 6819 3406 8d1e a003 d400 0c80  ....h.4.........
0000090: f534 0034 309a 0006 83d4 0000 01a6 80c8  .4.40...........
00000a0: 1900 6103 a01b 5034 69a1 a1a0 6868 3403  ..a...P4i...hh4.
00000b0: 4341 a340 64f5 3400 0680 6801 a340 6800  CA.@d.4...h..@h.
00000c0: 000d 0068 0340 00d0 01a1 a068 3430 3516  ...h.@.....h405.
00000d0: 1543 1355 0d26 5d39 505d 970e fcac 9c37  .C.U.&]9P].....7
00000e0: 0ec4 62b1 05bc 607b 68e4 c4f4 efa3 32f8  ..b...`{h.....2.
00000f0: 6d9e 9c52 9d50 36a0 5598 b734 a0c4 7683  m..R.P6.U..4..v.
0000100: 04e3 7cbd ec15 ea5d 1db8 1283 ea8b 4318  ..|....]......C.
0000110: 0358 207a a12c 554f 4a2d 5428 eb47 6e7c  .X z.,UOJ-T(.Gn|
0000120: ffdc 4018 60fc 0690 28ec 12b9 5d02 eecb  ..@.`...(...]...
0000130: 11d4 e987 eb36 d574 e87c 2e67 f803 2cdf  .....6.t.|.g..,.
0000140: b465 9110 302d a9c0 0c33 3e55 573c 8818  .e..0-...3>UW<..
0000150: 76cf 6c6a 5efd c51e 20ec 2358 f5a8 694e  v.lj^... .#X..iN
0000160: bc7a bc91 0376 ebc8 61a2 33c1 97e9 936d  .z...v..a.3....m
0000170: df2b ceef 0a4f 6039 8cb5 b9cc d490 607b  .+...O`9......`{
0000180: ff20 e253 1875 489a 0465 3643 497e 8348  . .S.uH..e6CI~.H
0000190: 51dd d85e 5038 9c31 fcc3 bb2b 6157 0413  Q..^P8.1...+aW..
00001a0: 7b90 6633 f706 0005 3dc0 7d9b f4ba b026  {.f3....=.}....&
00001b0: 1a91 eca8 8423 7d1b 0401 d150 0c14 1fc5  .....#}....P....
00001c0: ef57 ef39 3e53 dfc5 c2ce 29de 871f dce8  .W.9>S....).....
00001d0: 2f85 3ff8 1f16 a894 6677 d26e a7b6 2550  /.?.....fw.n..%P
00001e0: bc05 d2e6 51f8 d799 52f1 2783 a642 db4e  ....Q...R.'..B.N
00001f0: 344f b1a4 608c 4249 20f6 549e 64db e2e8  4O..`.BI .T.d...
0000200: 55da 10b5 adfc 28fd 1a8c 7e81 4188 5028  U.....(...~.A.P(
0000210: 29ec ddf4 4bef 8de6 9a0b 0d49 14e7 d30e  )...K......I....
0000220: 48a4 55b8 5729 7484 2900 e001 e451 7290  H.U.W)t.)....Qr.
0000230: 057c f004 bb85 0788 0139 d730 8a08 0448  .|.......9.0...H
0000240: 4a45 0565 243c 7017 9906 e644 ff8b b922  JE.e$<p....D..."
0000250: 9c28 480a 09e5 7f80 c978 5ff9 3f02 0000  .(H......x_.?...
bandit12@bandit:~$ mkdir /tmp/tmp
bandit12@bandit:~$ cp data.txt /tmp/tmp
bandit12@bandit:~$ cd /tmp/tmp
bandit12@bandit:/tmp/tmp$ xxd -r data.txt > data.bin
bandit12@bandit:/tmp/tmp$ file data.bin
data.bin: gzip compressed data, was "data2.bin", from Unix, last modified: Thu Sep 28 14:04:06 2017, max compression
bandit12@bandit:/tmp/tmp$ mv data.bin data2.bin.gz
bandit12@bandit:/tmp/tmp$ gzip -d data2.bin.gz
bandit12@bandit:/tmp/tmp$ file data2.bin
data2.bin: bzip2 compressed data, block size = 900k
bandit12@bandit:/tmp/tmp$ mv data2.bin data3.bin.bz2
bandit12@bandit:/tmp/tmp$ bzip2 -d data3.bin.bz2
bandit12@bandit:/tmp/tmp$ file data3.bin
data3.bin: gzip compressed data, was "data4.bin", from Unix, last modified: Thu Sep 28 14:04:06 2017, max compression
bandit12@bandit:/tmp/tmp$ mv data3.bin data4.bin.gz
bandit12@bandit:/tmp/tmp$ gzip -d data4.bin.gz     
bandit12@bandit:/tmp/tmp$ file data4.bin
data4.bin: POSIX tar archive (GNU)
bandit12@bandit:/tmp/tmp$ mv data4.bin data5.bin.tar
bandit12@bandit:/tmp/tmp$ tar xvf data5.bin.tar
data5.bin
bandit12@bandit:/tmp/tmp$ file data5.bin
data5.bin: POSIX tar archive (GNU)
bandit12@bandit:/tmp/tmp$ mv data5.bin data6.bin.tar
bandit12@bandit:/tmp/tmp$ tar xvf data6.bin.tar
data6.bin
bandit12@bandit:/tmp/tmp$ file data6.bin
data6.bin: bzip2 compressed data, block size = 900k
bandit12@bandit:/tmp/tmp$ mv data6.bin data7.bin.bz2
bandit12@bandit:/tmp/tmp$ bzip2 -d data7.bin.bz2
bandit12@bandit:/tmp/tmp$ file data7.bin
data7.bin: POSIX tar archive (GNU)
bandit12@bandit:/tmp/tmp$ mv data7.bin data8.bin.tar
bandit12@bandit:/tmp/tmp$ tar xvf data8.bin.tar
data8.bin
bandit12@bandit:/tmp/tmp$ file data8.bin
data8.bin: gzip compressed data, was "data9.bin", from Unix, last modified: Thu Sep 28 14:04:06 2017, max compression
bandit12@bandit:/tmp/tmp$ mv data8.bin data9.bin.gz
bandit12@bandit:/tmp/tmp$ gzip -d data9.bin.gz
bandit12@bandit:/tmp/tmp$ file data9.bin
data9.bin: ASCII text
bandit12@bandit:/tmp/tmp$ cat data9.bin
The password is 8ZjyCRiBWFYkneahHwxCv3wb2a1ORpYL
```

## Level13:

```
bandit13@bandit:~$ ls
sshkey.private
bandit13@bandit:~$ ssh -p 2220 -i sshkey.private bandit14@bandit.labs.overthewire.org
bandit14@bandit:~$ cat /etc/bandit_pass/bandit14
4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e
```

## Level14:

```
bandit14@bandit:~$ telnet localhost 30000
Trying 127.0.0.1...
Connected to localhost.
Escape character is '^]'.
4wcYUJFw0k0XLShlDzztnTBHiqxU3b3e
Correct!
BfMYroe26WYalil77FoDi9qh59eK5xNr

Connection closed by foreign host.
```

## Level15:

```
bandit15@bandit:~$ openssl s_client -ign_eof -connect localhost:30001
CONNECTED(00000003)
depth=0 CN = 8f75dc271013
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = 8f75dc271013
verify return:1
---
Certificate chain
 0 s:/CN=8f75dc271013
   i:/CN=8f75dc271013
---
Server certificate
-----BEGIN CERTIFICATE-----
MIICvjCCAaagAwIBAgIJALADbwWQ0u9aMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNV
BAMTDDhmNzVkYzI3MTAxMzAeFw0xNzA5MTYwNzAyMjRaFw0yNzA5MTQwNzAyMjRa
MBcxFTATBgNVBAMTDDhmNzVkYzI3MTAxMzCCASIwDQYJKoZIhvcNAQEBBQADggEP
ADCCAQoCggEBALmjBUTlmjROJUssm+rAlFADFfzrz+xCH0qUXryou5/wW8pnQ6nG
HbdeRIBwTVGFiDIKRbFdWQU4BbrfjEhyGn9d7eh/3GV09ZdvLDYRoLmJ4tDF8CiC
wGl9GufcWr3zeaNYa8CwVdtWam8umhMICrsv7B5iV9RdSQfudUtVbr26SBVyuhBm
m0t7Su6rLCrrGtshdIihjk4k67bBMpSNAOduhpp79UgIPKcwJUhRJHTcji3m/IQ8
O9zNS25oL8KhMn7e/Xe70kztstq0ShMsx8feutONnGulUOlaEMMqW+HSWgnVeG/r
mU9Nzwn++4qxe16OvvmXAzctH2RlDx7XbcsCAwEAAaMNMAswCQYDVR0TBAIwADAN
BgkqhkiG9w0BAQsFAAOCAQEADHODX5CcMLI5fdumzly5FAVg5Yc22eDGNhmyhi/N
kDhP6QYw+HW5nWEYapc9m/ZQGEEoxr+wj6qeEhscxRxpuEIcunZsLKcoAmToyXeO
ANMslQugRcGqN57Pt0h5VuctLMa3ickeVPFvV6gxJSHBNRK1iN8nrfsy+zR+stzI
xcjIuakDDxMKFtb/1TMKf4/EsimSQLS0WXLjbxfQ/J510O4/Of0tmZI0ZIG+cKmM
V5hAOtuuAk6jREfWYJQ3DB+phv7PO9s2FpofVJss5PK4NWDS7UQOv359ZOJ85ZpJ
ihGxDqV7IAHJZNM9lvFXz/+EOn1oTGW9V8bAwt34OVYoPw==
-----END CERTIFICATE-----
subject=/CN=8f75dc271013
issuer=/CN=8f75dc271013
---
No client certificate CA names sent
---
SSL handshake has read 1682 bytes and written 637 bytes
---
New, TLSv1/SSLv3, Cipher is DHE-RSA-AES256-SHA
Server public key is 2048 bit
Secure Renegotiation IS supported
Compression: NONE
Expansion: NONE
SSL-Session:
    Protocol  : SSLv3
    Cipher    : DHE-RSA-AES256-SHA
    Session-ID: 501A31E5549EEE1CE9B50A0351204CFCF0D07DB01E2FDB7020BB6E9A5CDF1D75
    Session-ID-ctx:
    Master-Key: 9B856B378D9EBCA0DAD1AA2E11051E24ABEBB95945A468092C7D541569161D82934360D0948B290CA5256CD78537487C
    Key-Arg   : None
    PSK identity: None
    PSK identity hint: None
    SRP username: None
    Start Time: 1507321868
    Timeout   : 300 (sec)
    Verify return code: 18 (self signed certificate)
---
BfMYroe26WYalil77FoDi9qh59eK5xNr
Correct!
cluFn7wTiGryunymYOu4RcffSxQluehd

read:errno=0
```

## Level16:

```
bandit16@bandit:~$ nmap -A -T4 -p31000-32000 localhost

Starting Nmap 6.40 ( http://nmap.org ) at 2017-10-06 22:37 UTC
Nmap scan report for localhost (127.0.0.1)
Host is up (0.00071s latency).
Other addresses for localhost (not scanned): 127.0.0.1
Not shown: 996 closed ports
PORT      STATE SERVICE VERSION
31046/tcp open  echo
31518/tcp open  msdtc   Microsoft Distributed Transaction Coordinator (error)
31691/tcp open  echo
31790/tcp open  msdtc   Microsoft Distributed Transaction Coordinator (error)
31960/tcp open  echo
Service Info: OS: Windows; CPE: cpe:/o:microsoft:windows

Service detection performed. Please report any incorrect results at http://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 41.30 seconds
bandit16@bandit:~$ openssl s_client -connect localhost:31790
CONNECTED(00000003)
depth=0 CN = 8f75dc271013
verify error:num=18:self signed certificate
verify return:1
depth=0 CN = 8f75dc271013
verify return:1
---
Certificate chain
 0 s:/CN=8f75dc271013
   i:/CN=8f75dc271013
---
Server certificate
-----BEGIN CERTIFICATE-----
MIICvjCCAaagAwIBAgIJALADbwWQ0u9aMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNV
BAMTDDhmNzVkYzI3MTAxMzAeFw0xNzA5MTYwNzAyMjRaFw0yNzA5MTQwNzAyMjRa
MBcxFTATBgNVBAMTDDhmNzVkYzI3MTAxMzCCASIwDQYJKoZIhvcNAQEBBQADggEP
ADCCAQoCggEBALmjBUTlmjROJUssm+rAlFADFfzrz+xCH0qUXryou5/wW8pnQ6nG
HbdeRIBwTVGFiDIKRbFdWQU4BbrfjEhyGn9d7eh/3GV09ZdvLDYRoLmJ4tDF8CiC
wGl9GufcWr3zeaNYa8CwVdtWam8umhMICrsv7B5iV9RdSQfudUtVbr26SBVyuhBm
m0t7Su6rLCrrGtshdIihjk4k67bBMpSNAOduhpp79UgIPKcwJUhRJHTcji3m/IQ8
O9zNS25oL8KhMn7e/Xe70kztstq0ShMsx8feutONnGulUOlaEMMqW+HSWgnVeG/r
mU9Nzwn++4qxe16OvvmXAzctH2RlDx7XbcsCAwEAAaMNMAswCQYDVR0TBAIwADAN
BgkqhkiG9w0BAQsFAAOCAQEADHODX5CcMLI5fdumzly5FAVg5Yc22eDGNhmyhi/N
kDhP6QYw+HW5nWEYapc9m/ZQGEEoxr+wj6qeEhscxRxpuEIcunZsLKcoAmToyXeO
ANMslQugRcGqN57Pt0h5VuctLMa3ickeVPFvV6gxJSHBNRK1iN8nrfsy+zR+stzI
xcjIuakDDxMKFtb/1TMKf4/EsimSQLS0WXLjbxfQ/J510O4/Of0tmZI0ZIG+cKmM
V5hAOtuuAk6jREfWYJQ3DB+phv7PO9s2FpofVJss5PK4NWDS7UQOv359ZOJ85ZpJ
ihGxDqV7IAHJZNM9lvFXz/+EOn1oTGW9V8bAwt34OVYoPw==
-----END CERTIFICATE-----
subject=/CN=8f75dc271013
issuer=/CN=8f75dc271013
---
No client certificate CA names sent
---
SSL handshake has read 1682 bytes and written 637 bytes
---
New, TLSv1/SSLv3, Cipher is DHE-RSA-AES256-SHA
Server public key is 2048 bit
Secure Renegotiation IS supported
Compression: NONE
Expansion: NONE
SSL-Session:
    Protocol  : SSLv3
    Cipher    : DHE-RSA-AES256-SHA
    Session-ID: 7B992CFBAA0357DCC576D1E4A84B2A877DE033F196A83332021B81D9BCFF903E
    Session-ID-ctx:
    Master-Key: 7FC3A8ABDD7C48A46DBFB44FDC0C260A86EE5A2394BBD2788A6FFEE64B72F6092686A6B3EBF4CD80FF1B2BBDDB880FEC
    Key-Arg   : None
    PSK identity: None
    PSK identity hint: None
    SRP username: None
    Start Time: 1507329680
    Timeout   : 300 (sec)
    Verify return code: 18 (self signed certificate)
---
cluFn7wTiGryunymYOu4RcffSxQluehd
Correct!
-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEAvmOkuifmMg6HL2YPIOjon6iWfbp7c3jx34YkYWqUH57SUdyJ
imZzeyGC0gtZPGujUSxiJSWI/oTqexh+cAMTSMlOJf7+BrJObArnxd9Y7YT2bRPQ
Ja6Lzb558YW3FZl87ORiO+rW4LCDCNd2lUvLE/GL2GWyuKN0K5iCd5TbtJzEkQTu
DSt2mcNn4rhAL+JFr56o4T6z8WWAW18BR6yGrMq7Q/kALHYW3OekePQAzL0VUYbW
JGTi65CxbCnzc/w4+mqQyvmzpWtMAzJTzAzQxNbkR2MBGySxDLrjg0LWN6sK7wNX
x0YVztz/zbIkPjfkU1jHS+9EbVNj+D1XFOJuaQIDAQABAoIBABagpxpM1aoLWfvD
KHcj10nqcoBc4oE11aFYQwik7xfW+24pRNuDE6SFthOar69jp5RlLwD1NhPx3iBl
J9nOM8OJ0VToum43UOS8YxF8WwhXriYGnc1sskbwpXOUDc9uX4+UESzH22P29ovd
d8WErY0gPxun8pbJLmxkAtWNhpMvfe0050vk9TL5wqbu9AlbssgTcCXkMQnPw9nC
YNN6DDP2lbcBrvgT9YCNL6C+ZKufD52yOQ9qOkwFTEQpjtF4uNtJom+asvlpmS8A
vLY9r60wYSvmZhNqBUrj7lyCtXMIu1kkd4w7F77k+DjHoAXyxcUp1DGL51sOmama
+TOWWgECgYEA8JtPxP0GRJ+IQkX262jM3dEIkza8ky5moIwUqYdsx0NxHgRRhORT
8c8hAuRBb2G82so8vUHk/fur85OEfc9TncnCY2crpoqsghifKLxrLgtT+qDpfZnx
SatLdt8GfQ85yA7hnWWJ2MxF3NaeSDm75Lsm+tBbAiyc9P2jGRNtMSkCgYEAypHd
HCctNi/FwjulhttFx/rHYKhLidZDFYeiE/v45bN4yFm8x7R/b0iE7KaszX+Exdvt
SghaTdcG0Knyw1bpJVyusavPzpaJMjdJ6tcFhVAbAjm7enCIvGCSx+X3l5SiWg0A
R57hJglezIiVjv3aGwHwvlZvtszK6zV6oXFAu0ECgYAbjo46T4hyP5tJi93V5HDi
Ttiek7xRVxUl+iU7rWkGAXFpMLFteQEsRr7PJ/lemmEY5eTDAFMLy9FL2m9oQWCg
R8VdwSk8r9FGLS+9aKcV5PI/WEKlwgXinB3OhYimtiG2Cg5JCqIZFHxD6MjEGOiu
L8ktHMPvodBwNsSBULpG0QKBgBAplTfC1HOnWiMGOU3KPwYWt0O6CdTkmJOmL8Ni
blh9elyZ9FsGxsgtRBXRsqXuz7wtsQAgLHxbdLq/ZJQ7YfzOKU4ZxEnabvXnvWkU
YOdjHdSOoKvDQNWu6ucyLRAWFuISeXw9a/9p7ftpxm0TSgyvmfLF2MIAEwyzRqaM
77pBAoGAMmjmIJdjp+Ez8duyn3ieo36yrttF5NSsJLAbxFpdlc1gvtGCWW+9Cq0b
dxviW8+TFVEBl1O4f7HVm6EpTscdDxU+bCXWkfjuRb7Dy9GOtt9JPsX8MBTakzh3
vBgsyi/sN3RqRBcGU40fOoZyfAMT8s1m/uYv52O6IgeuZ/ujbjY=
-----END RSA PRIVATE KEY-----

read:errno=0
bandit16@bandit:/tmp$ vim b17.key
bandit16@bandit:/tmp$ ssh -i b17.key -p 2220 bandit17@bandit.labs.overthewire.org
The authenticity of host '[bandit.labs.overthewire.org]:2220 ([0.0.0.0]:2220)' can't be established.
ECDSA key fingerprint is ee:4c:8c:e7:57:2c:bc:63:24:b8:e6:23:27:63:72:9f.
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added '[bandit.labs.overthewire.org]:2220,[0.0.0.0]:2220' (ECDSA) to the list of known hosts.
 _                     _ _ _
| |__   __ _ _ __   __| (_) |_
| '_ \ / _` | '_ \ / _` | | __|
| |_) | (_| | | | | (_| | | |_
|_.__/ \__,_|_| |_|\__,_|_|\__|

a http://www.overthewire.org wargame.

@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
@         WARNING: UNPROTECTED PRIVATE KEY FILE!          @
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Permissions 0664 for 'b17.key' are too open.
It is required that your private key files are NOT accessible by others.
This private key will be ignored.
bad permissions: ignore key: b17.key
bandit17@bandit.labs.overthewire.org's password:

bandit16@bandit:/tmp$ chmod 600 b17.key
bandit16@bandit:/tmp$ ssh -i b17.key -p 2220 bandit17@bandit.labs.overthewire.org
bandit17@bandit:~$ cat /etc/bandit_pass/bandit17
xLYVMN9WE5zQ5vHacb0sZEVqbrp7nBTn
```

## Level17:

```
bandit17@bandit:~$ ls
passwords.new  passwords.old
bandit17@bandit:~$ diff passwords.new passwords.old
42c42
< kfBf3eYk5BPBRzwjqutbbfE887SVc5Yd
---
> R3GQabj3vKRTcjTTISWvO1RJWc5sqSXO
```

## Level18:

```
awe@kotolinux:~$ ssh -p 2220 bandit18@bandit.labs.overthewire.org "ls"
 _                     _ _ _
| |__   __ _ _ __   __| (_) |_
| '_ \ / _` | '_ \ / _` | | __|
| |_) | (_| | | | | (_| | | |_
|_.__/ \__,_|_| |_|\__,_|_|\__|

a http://www.overthewire.org wargame.

bandit18@bandit.labs.overthewire.org's password:
readme
awe@kotolinux:~$ ssh -p 2220 bandit18@bandit.labs.overthewire.org "cat readme"
 _                     _ _ _
| |__   __ _ _ __   __| (_) |_
| '_ \ / _` | '_ \ / _` | | __|
| |_) | (_| | | | | (_| | | |_
|_.__/ \__,_|_| |_|\__,_|_|\__|

a http://www.overthewire.org wargame.

bandit18@bandit.labs.overthewire.org's password:
IueksS7Ubh8G3DCwVzrTd8rAVOwq3M5x
```

## Level19:

```
bandit19@bandit:~$ ls
bandit20-do
bandit19@bandit:~$ bandit20-do
-bash: bandit20-do: command not found
bandit19@bandit:~$ ./bandit20-do
Run a command as another user.
  Example: ./bandit20-do id
bandit19@bandit:~$ ./bandit20-do cat /etc/bandit_pass/bandit20
GbKksEFF4yrVs6il55v6gwY5aVje5f0j
```

## Level20:

```
bandit20@bandit:~$ tmux

(Screen 1)
bandit20@bandit:~$ nc localhost 3000
bandit20@bandit:~$ nc -l localhost 3000
GbKksEFF4yrVs6il55v6gwY5aVje5f0j
gE269g2h3mw3pwgrj0Ha9Uoqen1c9DGr

(Screen 2)
bandit20@bandit:~$ ./suconnect 3000
Read: GbKksEFF4yrVs6il55v6gwY5aVje5f0j
Password matches, sending next password
```

## Level21:

```
bandit21@bandit:~$ cd /etc/cron.d
bandit21@bandit:/etc/cron.d$ ls
cron-apt  cronjob_bandit22  cronjob_bandit23  cronjob_bandit24  php5
bandit21@bandit:/etc/cron.d$ cat cronjob_bandit22
@reboot bandit22 /usr/bin/cronjob_bandit22.sh &> /dev/null
* * * * * bandit22 /usr/bin/cronjob_bandit22.sh &> /dev/null
bandit21@bandit:/etc/cron.d$ cat /usr/bin/cronjob_bandit22.sh
#!/bin/bash
chmod 644 /tmp/t7O6lds9S0RqQh9aMcz6ShpAoZKF7fgv
cat /etc/bandit_pass/bandit22 > /tmp/t7O6lds9S0RqQh9aMcz6ShpAoZKF7fgv
bandit21@bandit:/etc/cron.d$ cat /tmp/t7O6lds9S0RqQh9aMcz6ShpAoZKF7fgv
Yk7owGAcWjwMVRwrTesJEwB7WVOiILLI
```

## Level22:

```
bandit22@bandit:~$ cd /etc/cron.d
bandit22@bandit:/etc/cron.d$ ls
cron-apt  cronjob_bandit22  cronjob_bandit23  cronjob_bandit24  php5
bandit22@bandit:/etc/cron.d$ cat cronjob_bandit23
@reboot bandit23 /usr/bin/cronjob_bandit23.sh  &> /dev/null
* * * * * bandit23 /usr/bin/cronjob_bandit23.sh  &> /dev/null
bandit22@bandit:/etc/cron.d$ cat /usr/bin/cronjob_bandit23.sh
#!/bin/bash

myname=$(whoami)
mytarget=$(echo I am user $myname | md5sum | cut -d ' ' -f 1)

echo "Copying passwordfile /etc/bandit_pass/$myname to /tmp/$mytarget"

cat /etc/bandit_pass/$myname > /tmp/$mytarget
bandit22@bandit:/etc/cron.d$ whoami
bandit22
bandit22@bandit:/etc/cron.d$ ls -la /usr/bin/cronjob_bandit23.sh
-rwxr-x--- 1 bandit23 bandit22 211 Sep 28 14:04 /usr/bin/cronjob_bandit23.sh
bandit22@bandit:/etc/cron.d$ echo I am user bandit23 | md5sum | cut -d ' ' -f 1
8ca319486bfbbc3663ea0fbe81326349
bandit22@bandit:/etc/cron.d$ cat /tmp/8ca319486bfbbc3663ea0fbe81326349
jc1udXuA1tiHqjIsL8yaapX5XIAI6i0n
```

## Level23:

```
bandit23@bandit:~$ cd /etc/cron.d
bandit23@bandit:/etc/cron.d$ ls
cron-apt  cronjob_bandit22  cronjob_bandit23  cronjob_bandit24  php5
bandit23@bandit:/etc/cron.d$ cat cronjob_bandit24
@reboot bandit24 /usr/bin/cronjob_bandit24.sh &> /dev/null
* * * * * bandit24 /usr/bin/cronjob_bandit24.sh &> /dev/null
bandit23@bandit:/etc/cron.d$ cat /usr/bin/cronjob_bandit24.sh
#!/bin/bash

myname=$(whoami)

cd /var/spool/$myname
echo "Executing and deleting all scripts in /var/spool/$myname:"
for i in * .*;
do
    if [ "$i" != "." -a "$i" != ".." ];
    then
	echo "Handling $i"
	timeout -s 9 60 ./$i
	rm -f ./$i
    fi
done

bandit23@bandit:/etc/cron.d$ cd
bandit23@bandit:~$ vim getpass.sh
bandit23@bandit:~$ cat getpass.sh
#!/bin/bash

mkdir /tmp/pass
cat /etc/bandit_pass/bandit24 > /tmp/pass/bandit24

bandit23@bandit:~$ chmod a+x getpass.sh
bandit23@bandit:~$ cp getpass.sh /var/spool/bandit24/
bandit23@bandit:~$ cat /tmp/pass/bandit24
UoMYTrfrBFHyQXmg6gzctqAwOmw1IohZ
```

## Level24:

```
bandit24@bandit:~$ vim bandit24_bf.sh
bandit24@bandit:~$ chmod a+x bandit24_bf.sh
bandit24@bandit:~$ ./bandit24_bf.sh
Found key 5588!
I am the pincode checker for user bandit25. Please enter the password for user bandit24 and the secret pincode on a single line, separated by a space.
Correct!
The password of user bandit25 is uNG9O58gUE7snukf3bvZ0rxhtnjzSGzG

Exiting.
```

## Level25:
