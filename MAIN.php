local key = _G.Key
local check = "https://raw.githubusercontent.com/xZpmkill802/Bluelock/refs/heads/main/Check.php?key=" .. key
if game:HttpGet(check) == "Whitelisted" then
loadstring(game:HttpGet("scripthere"))()
else
game.Players.LocalPlayer:Kick("Invalid Key! Please Rejoin And Try Again.")
end
