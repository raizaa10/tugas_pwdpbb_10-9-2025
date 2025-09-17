function ButtonClick() {
  const handleClick = () => {
    alert("Tombol diklik!");
  };

  return <button onClick={handleClick}>Klik Saya</button>;
}

export default ButtonClick;
